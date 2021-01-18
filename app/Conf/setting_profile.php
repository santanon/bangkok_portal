<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/setting_profile/
LOCATION : /application/controllers/panels/setting_profile.php
*/
 
class Setting_profile
{  
	var $mod = 'setting_profile'; 
	var $mod_model = 'Portal_website_model'; 
	var $mod_title = 'Profile Setting'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('id');
	
	var $config_submenu_title = array('edit');
	var $config_submenu_mod = array('edit');
	
	public function index()
	{ 
		//redirect('/panels/' . $this->mod . '/edit');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit' ?>" />
        <?php
        exit;
	} 
	
	public function edit()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_sub_setting_profile');
		$data['this_page'] = $this->lang->line('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit'); 
		$data['config_footer_js'] = 'mainmenuFocus(1,2,3);btn2stageFocus(0,1);'; 
		$this->load->view('panel/' . $this->mod . '/edit', $data);  
	}
	
	public function edit_submit()
	{ 
		$this->include_header();   
		$this->load->model('Portal_website_model'); 
	 
		$d = new stdClass();
		$d->profile_name = $this->input->post('profile_name', TRUE);
		$d->profile_lastname = $this->input->post('profile_lastname', TRUE);
		$d->profile_mobile = $this->input->post('profile_mobile', TRUE);  
		$d->profile_idcard = $this->input->post('profile_idcard', TRUE);  
		$d->last_update = date('U');  
		$this->Portal_website_model->update_data($d,$_SESSION['panel_id'],'id');
		
		$_SESSION['panel_profile_name'] = $this->input->post('profile_name', TRUE);
		$_SESSION['panel_profile_lastname'] = $this->input->post('profile_lastname', TRUE);
		$_SESSION['panel_profile_mobile'] = $this->input->post('profile_mobile', TRUE); 
		$_SESSION['panel_profile_idcard'] = $this->input->post('profile_idcard', TRUE); 
		 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		 
		//redirect('/panels/' . $this->mod . '/edit');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit' ?>" />
        <?php
        exit;
	}  
}
?>