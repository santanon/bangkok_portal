<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		 
		$data['this_cat'] = $TextLanguage->lang('menu_sub_setting_bg');
		$data['this_page'] = $TextLanguage->lang('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,4);btn2stageFocus(0,1);';
		
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ?";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);  
		$data['list_cat'] = $q;
		 
		return $data;
	}
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
		
		 
		$d = new \stdClass();
		$d->mod_news = $CustomHelper->input_post('mod_news', TRUE); 
		$d->mod_member = $CustomHelper->input_post('mod_member', TRUE);
		$d->mod_activities = $CustomHelper->input_post('mod_activities', FALSE);
		$d->mod_gallery = $CustomHelper->input_post('mod_gallery', TRUE);
		$d->mod_webboard = $CustomHelper->input_post('mod_webboard', TRUE);
		$d->mod_poll = $CustomHelper->input_post('mod_poll', TRUE);
		$d->mod_question = $CustomHelper->input_post('mod_question', TRUE);
		$d->mod_faq = $CustomHelper->input_post('mod_faq', TRUE); 
		$d->mod_download = $CustomHelper->input_post('mod_download', TRUE);  
		$d->mod_search = $CustomHelper->input_post('mod_search', TRUE); 
		$d->mod_sitemap = $CustomHelper->input_post('mod_sitemap', TRUE); 
		$d->mod_banner = $CustomHelper->input_post('mod_banner', TRUE); 
		$d->mod_texteditor = $CustomHelper->input_post('mod_texteditor', TRUE); 
		$d->mod_contact = $CustomHelper->input_post('mod_contact', TRUE);
		
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."''",'');
		
		  
		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');
		  
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	}  
	
	public function reset_bg($v)
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		    
		
		 
		$d = new \stdClass();
		$d->{$v} = ''; 
		
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."''",'');
		 
		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');
		 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
}
?>