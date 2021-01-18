<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/setting_html_css/
LOCATION : /application/controllers/panels/setting_html_css.php
*/
 
class Setting_html_css
{  
	var $mod = 'setting_html_css'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'HTML & CSS Setting'; 
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
		 
		$data['this_cat'] = $this->lang->line('menu_sub_setting_html_css');
		$data['this_page'] = $this->lang->line('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit'); 
		$data['config_footer_js'] = 'mainmenuFocus(1,2,5);btn2stageFocus(0,1);'; 
		$this->load->view('panel/' . $this->mod . '/edit', $data);  
	}
	
	public function edit_submit()
	{ 
		$this->include_header();   
		$this->load->model($this->mod_model); 
	 
		$d = new stdClass();
		$d->html_head_info = $this->input->post('html_head_info', FALSE);  
		$d->css_info = $this->input->post('css_info', FALSE);  
		$d->html_body_info = $this->input->post('html_body_info', FALSE);  
		$d->html_foot_info = $this->input->post('html_foot_info', FALSE);   
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id');
		
		$_SESSION['panel_style_html_head_info'] = $this->input->post('html_head_info', FALSE);
		$_SESSION['panel_style_css_info'] = $this->input->post('css_info', FALSE);
		$_SESSION['panel_style_html_body_info'] = $this->input->post('html_body_info', FALSE); 
		$_SESSION['panel_style_html_foot_info'] = $this->input->post('html_foot_info', FALSE); 
		 	
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