<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Setting_account
{  
	var $mod = 'setting_account'; 
	var $mod_model = 'Portal_website_model'; 
	var $mod_title = 'Account Setting'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('id');
	
	var $config_submenu_title = array('change_password','change_email');
	var $config_submenu_mod = array('change_password','change_email');
	
	public function index()
	{  
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/change_password?m='.$this->mod.'' ?>" />        
        <?php
        exit;
	} 
	
	public function change_email()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang('menu_sub_setting_account');
		$data['this_page'] = $TextLanguage->lang('change_email');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		
		$data['config_mod'] = $this->mod;
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_change_email');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,2);btn2stageFocus(0,2);';
          
		return $data;
	}
	
	public function change_email_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
 
		$current_password = $CustomHelper->input_post('p', TRUE);
		$new_email = $CustomHelper->input_post('email', TRUE);
		
		 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE profile_email = ?";	 	
		$v = $new_email;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
		$q = json_decode($res);
		  
		
		if(count($q) > 0)
		{ 
			?><meta charset="utf-8" />
            <script type="text/javascript">
			alert('<?php echo $TextLanguage->lang('email_already_exist'); ?>');
			window.history.back();
			</script>
            <?php
			exit;
		}
		  
	 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE id = ? AND password = '".md5($current_password)."'";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
		$q = json_decode($res);
		  
		
		if(count($q) > 0)
		{   
			$row = $q; 
			$this_id = $row[0]->id;	 
			
			$d = new \stdClass(); 
			$d->profile_email = $new_email;
			$d->last_update = date('U'); 
			
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE password = '".md5($current_password)."' AND id = '".$_SESSION['panel_id']."'",''); 
			  
			$CustomHelper->add_log('Account Setting - Change E-mail',$_SESSION['panel_username'],$_SESSION['panel_id'],'EMAIL_EDIT'); 
			$_SESSION['panel_profile_email'] = $new_email;
			?><meta charset="utf-8" />
			<script type="text/javascript">
			alert('<?php echo $TextLanguage->lang('change_email_success'); ?>');
			window.location = 'http://127.0.0.1:8000/manage-admin/edit_profile?m=setting_account&change_email=1';
			</script>
			<?php  
			exit;
		}
		else
		{
			?><meta charset="utf-8" />
            <script type="text/javascript">
			alert('<?php echo $TextLanguage->lang('current_password_is_invalid'); ?>');
			window.history.back();
			</script>
            <?php
			exit;
		} 
	} 	
	
	public function change_password()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang('menu_sub_setting_account');
		$data['this_page'] = $TextLanguage->lang('change_password');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		
		$data['config_mod'] = $this->mod;
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_change_password'); 
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,2);btn2stageFocus(0,1);';     
          
		return $data;
	}
	
	public function change_password_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
 
		$current_password = $CustomHelper->input_post('p1', TRUE);
		
		if(@$_SESSION['panel_login_web_user_login'] == '1')
		{
		 
			
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_user_model')." WHERE u = ? AND p = '".md5($current_password)."'";	 	
			$v = $_SESSION['panel_login_web_user_u'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_user_model')),$q,$v);
			$q = json_decode($res);
		 
			
			if(count($q) > 0)
			{   
				$row = $q; 
				$this_id = $row[0]->id;	
				$new_password = $CustomHelper->input_post('p2', TRUE);
				
				$d = new \stdClass(); 
				$d->p = md5($new_password);   
				 
				$this_qr = ''; 
				foreach($d as $key=>$value) 
				{
					$this_qr = $this_qr.$key." = '".addslashes($value)."',";
				}
				$this_qr = substr($this_qr,0,-1);  	 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_user_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_user_model')." SET ".$this_qr." WHERE p = '".md5($current_password)."' AND id = '".$this_id."'",''); 
				 
				$CustomHelper->add_log('Account Setting - Change Password',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');
				
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $TextLanguage->lang('change_password_success'); ?>');
				window.location = 'http://127.0.0.1:8000/manage-admin/edit_account?m=setting_account';
				</script>
				<?php  
				exit;
			}
			else
			{
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $TextLanguage->lang('current_password_is_invalid'); ?>');
				window.history.back();
				</script>
				<?php
				exit;
			} 	
		}
		else
		{
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE id = ? AND password = '".md5($current_password)."'";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
			$q = json_decode($res);
			
			
			if(count($q) > 0)
			{   
				$row = $q; 
				$this_id = $row[0]->id;	
				$new_password = $CustomHelper->input_post('p2', TRUE);
				
				$d = new \stdClass(); 
				$d->password = md5($new_password);  
				$d->last_update = date('U');    
				 
				$this_qr = ''; 
				foreach($d as $key=>$value) 
				{
					$this_qr = $this_qr.$key." = '".addslashes($value)."',";
				}
				$this_qr = substr($this_qr,0,-1);  	 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE password = '".md5($current_password)."' AND id = '".$_SESSION['panel_id']."'",''); 
				 
				$CustomHelper->add_log('Account Setting - Change Password',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');
				 
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $TextLanguage->lang('change_password_success'); ?>');
				window.location = 'http://127.0.0.1:8000/manage-admin/edit_account?m=setting_account';
				</script>
				<?php  
				exit;
			}
			else
			{
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $TextLanguage->lang('current_password_is_invalid'); ?>');
				window.history.back();
				</script>
				<?php
				exit;
			} 	
		}
		 
		
	} 	
}
?>