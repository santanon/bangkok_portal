<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		$data['this_cat'] = $TextLanguage->lang('menu_sub_setting_html_css');
		$data['this_page'] = $TextLanguage->lang('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit'); 
		$data['config_footer_js'] = 'mainmenuFocus(1,2,5);btn2stageFocus(0,1);'; 
		
		return $data;
	}
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
		 
	 
		$d = new \stdClass();
		$d->html_head_info = $CustomHelper->input_post('html_head_info', FALSE);  
		$d->css_info = $CustomHelper->input_post('css_info', FALSE);  
		$d->html_body_info = $CustomHelper->input_post('html_body_info', FALSE);  
		$d->html_foot_info = $CustomHelper->input_post('html_foot_info', FALSE);  
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",''); 
		 
	 
		
		$_SESSION['panel_style_html_head_info'] = $CustomHelper->input_post('html_head_info', FALSE);
		$_SESSION['panel_style_css_info'] = $CustomHelper->input_post('css_info', FALSE);
		$_SESSION['panel_style_html_body_info'] = $CustomHelper->input_post('html_body_info', FALSE); 
		$_SESSION['panel_style_html_foot_info'] = $CustomHelper->input_post('html_foot_info', FALSE); 
		  
		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT'); 
		  
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit_html_css?m='.$this->mod.'' ?>" />
        <?php
        exit;
	}  
}
?>