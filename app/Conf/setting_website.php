<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		$data['this_cat'] = $TextLanguage->lang('setting_website');
		$data['this_page'] = $TextLanguage->lang('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,1);btn2stageFocus(0,1);';
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_cat_model')." WHERE  id > ? ORDER BY title ASC";	 	
		$v = '0';
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_cat_model')),$q,$v);
		$q = json_decode($res);    
		$data['list_cat'] = $q;
		$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
		  
		return $data;
	}
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
	 
		$d = new \stdClass();
		$d->web_type = $CustomHelper->input_post('web_type', TRUE);
		$d->web_name = $CustomHelper->input_post('web_name', TRUE);
		$d->web_name_en = $CustomHelper->input_post('web_name_en', TRUE);
		//$d->web_desc = $CustomHelper->input_post('web_desc', TRUE); 
		$d->last_update = date('U');
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_model')." SET ".$this_qr." WHERE id = '".$_SESSION['panel_id']."'",''); 
		  
		$_SESSION['panel_web_type'] = $CustomHelper->input_post('web_type', TRUE);
		$_SESSION['panel_web_name'] = $CustomHelper->input_post('web_name', TRUE);
		$_SESSION['panel_web_name_en'] = $CustomHelper->input_post('web_name_en', TRUE);
		$_SESSION['panel_web_desc'] = $CustomHelper->input_post('web_desc', TRUE); 
		
		$d = new \stdClass(); 
		
		$d->info_keyword = $CustomHelper->input_post('info_keyword', TRUE);
		$d->info_description = $CustomHelper->input_post('info_description', TRUE);
		/*$d->lang_start = $CustomHelper->input_post('lang_start', TRUE);
		$d->block_ip = $CustomHelper->input_post('block_ip', TRUE);
		$d->close_status = $CustomHelper->input_post('close_status', TRUE);
		$d->close_type = $CustomHelper->input_post('close_type', TRUE);
		$d->close_info = $CustomHelper->input_post('close_info', TRUE);
		$d->close_redirect = $CustomHelper->input_post('close_redirect', TRUE); */
		/*$d->slogan_1 = $CustomHelper->input_post('slogan_1', TRUE);
		$d->slogan_2 = $CustomHelper->input_post('slogan_2', TRUE);
		$d->slogan_1_en = $CustomHelper->input_post('slogan_1_en', TRUE);
		$d->slogan_2_en = $CustomHelper->input_post('slogan_2_en', TRUE);*/
		 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",''); 
		  
		$_SESSION['panel_style_info_keyword'] = $CustomHelper->input_post('info_keyword', TRUE);
		$_SESSION['panel_style_info_description'] = $CustomHelper->input_post('info_description', TRUE);
		/*$_SESSION['panel_style_lang_start'] = $CustomHelper->input_post('lang_start', TRUE);
		$_SESSION['panel_style_block_ip'] = $CustomHelper->input_post('block_ip', TRUE);
		$_SESSION['panel_style_close_status'] = $CustomHelper->input_post('close_status', TRUE);
		$_SESSION['panel_style_close_type'] = $CustomHelper->input_post('close_type', TRUE);
		$_SESSION['panel_style_close_info'] = $CustomHelper->input_post('close_info', TRUE);
		$_SESSION['panel_style_close_redirect'] = $CustomHelper->input_post('close_redirect', TRUE); */
		
		/*
		$_SESSION['panel_style_slogan_1'] = $CustomHelper->input_post('slogan_1', TRUE); 
		$_SESSION['panel_style_slogan_2'] = $CustomHelper->input_post('slogan_2', TRUE); 
		$_SESSION['panel_style_slogan_1_en'] = $CustomHelper->input_post('slogan_1_en', TRUE); 
		$_SESSION['panel_style_slogan_2_en'] = $CustomHelper->input_post('slogan_2_en', TRUE);
		*/

		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT'); 
		  
		?>
		<script>alert('บันทึกสำเร็จ');</script>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit_website?m=setting_website' ?>" />
        <?php
        exit;
	}  
}
?>