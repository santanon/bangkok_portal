<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/setting_website/
LOCATION : /application/controllers/panels/setting_website.php
*/
 
class Setting_website
{  
	var $mod = 'setting_website'; 
	var $mod_model = 'Portal_website_model'; 
	var $mod_title = 'Website Setting'; 
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
		 
		$data['this_cat'] = $this->lang->line('setting_website');
		$data['this_page'] = $this->lang->line('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,1);btn2stageFocus(0,1);';
		 
		$this->load->model('Portal_website_cat_model'); 
		$d = new stdClass();  
		$d->orderby = 'title ASC';
		$data['list_cat'] = $this->Portal_website_cat_model->select_data($d);  
		$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
		  
		$this->load->view('panel/' . $this->mod . '/edit', $data); 
	}
	
	public function edit_submit()
	{ 
		$this->include_header();  
		$this->load->model('Portal_website_style_model'); 
		$this->load->model('Portal_website_model'); 
	 
		$d = new stdClass();
		$d->web_type = $this->input->post('web_type', TRUE);
		$d->web_name = $this->input->post('web_name', TRUE);
		$d->web_name_en = $this->input->post('web_name_en', TRUE);
		//$d->web_desc = $this->input->post('web_desc', TRUE); 
		$d->last_update = date('U');  
		$this->Portal_website_model->update_data($d,$_SESSION['panel_id'],'id');
		
		$_SESSION['panel_web_type'] = $this->input->post('web_type', TRUE);
		$_SESSION['panel_web_name'] = $this->input->post('web_name', TRUE);
		$_SESSION['panel_web_name_en'] = $this->input->post('web_name_en', TRUE);
		$_SESSION['panel_web_desc'] = $this->input->post('web_desc', TRUE); 
		
		$d = new stdClass(); 
		
		$d->info_keyword = $this->input->post('info_keyword', TRUE);
		$d->info_description = $this->input->post('info_description', TRUE);
		$d->lang_start = $this->input->post('lang_start', TRUE);
		$d->block_ip = $this->input->post('block_ip', TRUE);
		$d->close_status = $this->input->post('close_status', TRUE);
		$d->close_type = $this->input->post('close_type', TRUE);
		$d->close_info = $this->input->post('close_info', TRUE);
		$d->close_redirect = $this->input->post('close_redirect', TRUE); 
		$d->slogan_1 = $this->input->post('slogan_1', TRUE);
		$d->slogan_2 = $this->input->post('slogan_2', TRUE);
		$d->slogan_1_en = $this->input->post('slogan_1_en', TRUE);
		$d->slogan_2_en = $this->input->post('slogan_2_en', TRUE);
		 
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id');
		  
		$_SESSION['panel_style_info_keyword'] = $this->input->post('info_keyword', TRUE);
		$_SESSION['panel_style_info_description'] = $this->input->post('info_description', TRUE);
		$_SESSION['panel_style_lang_start'] = $this->input->post('lang_start', TRUE);
		$_SESSION['panel_style_block_ip'] = $this->input->post('block_ip', TRUE);
		$_SESSION['panel_style_close_status'] = $this->input->post('close_status', TRUE);
		$_SESSION['panel_style_close_type'] = $this->input->post('close_type', TRUE);
		$_SESSION['panel_style_close_info'] = $this->input->post('close_info', TRUE);
		$_SESSION['panel_style_close_redirect'] = $this->input->post('close_redirect', TRUE); 
		
		$_SESSION['panel_style_slogan_1'] = $this->input->post('slogan_1', TRUE); 
		$_SESSION['panel_style_slogan_2'] = $this->input->post('slogan_2', TRUE); 
		$_SESSION['panel_style_slogan_1_en'] = $this->input->post('slogan_1_en', TRUE); 
		$_SESSION['panel_style_slogan_2_en'] = $this->input->post('slogan_2_en', TRUE);
		 	
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