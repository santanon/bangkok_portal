<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/setting_bg/
LOCATION : /application/controllers/panels/setting_bg.php
*/
 
class Setting_bg
{  
	var $mod = 'setting_bg'; 
	var $mod_model = 'Portal_website_all_bg_model'; 
	var $mod_title = 'Background Setting'; 
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
		 
		$data['this_cat'] = $this->lang->line('menu_sub_setting_bg');
		$data['this_page'] = $this->lang->line('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,4);btn2stageFocus(0,1);';
		
		$this->load->model($this->mod_model);
		$d = new stdClass();  
		$d->where = array('web_id'=>$_SESSION['panel_id']);
		$data['list_cat'] = $this->{$this->mod_model}->select_data($d); 
		 
		$this->load->view('panel/' . $this->mod . '/edit', $data); 
	}
	
	public function edit_submit()
	{ 
		$this->include_header();   
		$this->load->model($this->mod_model);
		 
		$d = new stdClass();
		$d->mod_news = $this->input->post('mod_news', TRUE); 
		$d->mod_member = $this->input->post('mod_member', TRUE);
		$d->mod_activities = $this->input->post('mod_activities', FALSE);
		$d->mod_gallery = $this->input->post('mod_gallery', TRUE);
		$d->mod_webboard = $this->input->post('mod_webboard', TRUE);
		$d->mod_poll = $this->input->post('mod_poll', TRUE);
		$d->mod_question = $this->input->post('mod_question', TRUE);
		$d->mod_faq = $this->input->post('mod_faq', TRUE); 
		$d->mod_download = $this->input->post('mod_download', TRUE);  
		$d->mod_search = $this->input->post('mod_search', TRUE); 
		$d->mod_sitemap = $this->input->post('mod_sitemap', TRUE); 
		$d->mod_banner = $this->input->post('mod_banner', TRUE); 
		$d->mod_texteditor = $this->input->post('mod_texteditor', TRUE); 
		$d->mod_contact = $this->input->post('mod_contact', TRUE);
		
		 
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id');
		  	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		 
		//redirect('/panels/' . $this->mod . '/edit');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit' ?>" />
        <?php
        exit;
	}  
	
	public function reset_bg($v)
	{ 
		$this->include_header();   
		$this->load->model($this->mod_model);
		 
		$d = new stdClass();
		$d->{$v} = ''; 
		 
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id');
		  	
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