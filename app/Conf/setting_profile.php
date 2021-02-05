<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
		$data['this_cat'] = $TextLanguage->lang('menu_sub_setting_profile');
		$data['this_page'] = $TextLanguage->lang('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit'); 
		$data['config_footer_js'] = 'mainmenuFocus(1,2,3);btn2stageFocus(0,1);'; 
		
		return $data;
	}
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		     
	 
		$d = new \stdClass();
		$d->profile_name = $CustomHelper->input_post('profile_name', TRUE);
		$d->profile_lastname = $CustomHelper->input_post('profile_lastname', TRUE);
		$d->profile_mobile = $CustomHelper->input_post('profile_mobile', TRUE);  
		$d->profile_idcard = $CustomHelper->input_post('profile_idcard', TRUE);  
		$d->last_update = date('U');  
		 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_model')." SET ".$this_qr." WHERE id = '".$_SESSION['panel_id']."'",''); 
		
		$_SESSION['panel_profile_name'] = $CustomHelper->input_post('profile_name', TRUE);
		$_SESSION['panel_profile_lastname'] = $CustomHelper->input_post('profile_lastname', TRUE);
		$_SESSION['panel_profile_mobile'] = $CustomHelper->input_post('profile_mobile', TRUE); 
		$_SESSION['panel_profile_idcard'] = $CustomHelper->input_post('profile_idcard', TRUE); 
		 
		$CustomHelper->add_log('' . $this->mod_title . ' - Edit ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT'); 
		  
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
        <?php
        exit;
	}  
}
?>