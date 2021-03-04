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

		$main_arr = array("mod_activities","mod_banner","mod_contact","mod_download","mod_faq","mod_gallery","mod_news","mod_poll","mod_question","mod_search","mod_sitemap","mod_texteditor","mod_texteditor",'mod_vdo','mod_organize');

		foreach($main_arr as $main_arr_item)
		{
			$data['get_alt_'.$main_arr_item] 		= $CustomHelper->update_file_and_alt($main_arr_item,$q[0]->{$main_arr_item},$this->mod);
			$data['get_alt_en_'.$main_arr_item] 	= $CustomHelper->update_file_and_alt_en($main_arr_item,$q[0]->{$main_arr_item},$this->mod);
			$data['get_alt_sort_'.$main_arr_item] 	= $CustomHelper->update_file_and_alt_sort($main_arr_item,$q[0]->{$main_arr_item},$this->mod);
		}
		 
		return $data;
	}
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
 
		$uf = 'mod_activities';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_banner';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);
 
		$uf = 'mod_contact';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_download';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_faq';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_gallery';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_news';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_poll';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_question';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_search';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_sitemap';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_texteditor';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_vdo';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		$uf = 'mod_organize';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);
   
		$d = new \stdClass(); 
		$d->mod_activities = $CustomHelper->input_post('mod_activities', FALSE);
		$d->mod_banner = $CustomHelper->input_post('mod_banner', TRUE);
		$d->mod_contact = $CustomHelper->input_post('mod_contact', TRUE);
		$d->mod_download = $CustomHelper->input_post('mod_download', TRUE); 
		$d->mod_faq = $CustomHelper->input_post('mod_faq', TRUE); 
		$d->mod_gallery = $CustomHelper->input_post('mod_gallery', TRUE);
		$d->mod_news = $CustomHelper->input_post('mod_news', TRUE); 
		$d->mod_poll = $CustomHelper->input_post('mod_poll', TRUE);
		$d->mod_question = $CustomHelper->input_post('mod_question', TRUE);
		$d->mod_search = $CustomHelper->input_post('mod_search', TRUE); 
		$d->mod_sitemap = $CustomHelper->input_post('mod_sitemap', TRUE); 
		$d->mod_texteditor = $CustomHelper->input_post('mod_texteditor', TRUE);  
		$d->mod_vdo = $CustomHelper->input_post('mod_vdo', TRUE); 
		$d->mod_organize = $CustomHelper->input_post('mod_organize', TRUE); 

		$d->mod_activities = $mod_activities.'^'.$_POST['mod_activities_alt'].';'.$_POST['mod_activities_alt_en'].';'.$_POST['mod_activities_alt_sort']; 
		$d->mod_banner = $mod_banner.'^'.$_POST['mod_banner_alt'].';'.$_POST['mod_banner_alt_en'].';'.$_POST['mod_banner_alt_sort'];
		$d->mod_contact = $mod_contact.'^'.$_POST['mod_contact_alt'].';'.$_POST['mod_contact_alt_en'].';'.$_POST['mod_contact_alt_sort'];
		$d->mod_download = $mod_download.'^'.$_POST['mod_download_alt'].';'.$_POST['mod_download_alt_en'].';'.$_POST['mod_download_alt_sort'];
		$d->mod_faq = $mod_faq.'^'.$_POST['mod_faq_alt'].';'.$_POST['mod_faq_alt_en'].';'.$_POST['mod_faq_alt_sort'];
		$d->mod_gallery = $mod_gallery.'^'.$_POST['mod_gallery_alt'].';'.$_POST['mod_gallery_alt_en'].';'.$_POST['mod_gallery_alt_sort'];
		$d->mod_news = $mod_news.'^'.$_POST['mod_news_alt'].';'.$_POST['mod_news_alt_en'].';'.$_POST['mod_news_alt_sort'];
		$d->mod_poll = $mod_poll.'^'.$_POST['mod_poll_alt'].';'.$_POST['mod_poll_alt_en'].';'.$_POST['mod_poll_alt_sort'];
		$d->mod_question = $mod_question.'^'.$_POST['mod_question_alt'].';'.$_POST['mod_question_alt_en'].';'.$_POST['mod_question_alt_sort'];
		$d->mod_search = $mod_search.'^'.$_POST['mod_search_alt'].';'.$_POST['mod_search_alt_en'].';'.$_POST['mod_search_alt_sort'];
		$d->mod_sitemap = $mod_sitemap.'^'.$_POST['mod_sitemap_alt'].';'.$_POST['mod_sitemap_alt_en'].';'.$_POST['mod_sitemap_alt_sort'];
		$d->mod_texteditor = $mod_texteditor.'^'.$_POST['mod_texteditor_alt'].';'.$_POST['mod_texteditor_alt_en'].';'.$_POST['mod_texteditor_alt_sort']; 
		$d->mod_vdo = $mod_vdo.'^'.$_POST['mod_vdo_alt'].';'.$_POST['mod_vdo_alt_en'].';'.$_POST['mod_vdo_alt_sort']; 
		$d->mod_organize = $mod_organize.'^'.$_POST['mod_organize_alt'].';'.$_POST['mod_organize_alt_en'].';'.$_POST['mod_organize_alt_sort']; 
  
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",'');
		 
		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT'); 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit_bg?m='.$this->mod.'' ?>" />
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