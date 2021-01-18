<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/setting_account/
LOCATION : /application/controllers/panels/setting_account.php
*/
 
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
		//redirect('/panels/' . $this->mod . '/change_password'); 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/change_password' ?>" />
        <?php
        exit;
	} 
	
	public function change_email()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_sub_setting_account');
		$data['this_page'] = $this->lang->line('change_email');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		
		$data['config_mod'] = $this->mod;
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;       
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_change_email');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,2);btn2stageFocus(0,2);';
          
		$this->load->view('panel/' . $this->mod . '/change_email', $data); 
	}
	
	public function change_email_submit()
	{ 
		$this->include_header(); 
 
		$current_password = $this->input->post('p', TRUE);
		$new_email = $this->input->post('email', TRUE);
		
		$this->load->model('Portal_website_model'); 
		
		$d = new stdClass();  
		$d->where = array('profile_email' => $new_email);   
		$q = $this->Portal_website_model->select_data($d);  
		
		if($q->num_rows > 0)
		{ 
			?><meta charset="utf-8" />
            <script type="text/javascript">
			alert('<?php echo $this->lang->line('email_already_exist'); ?>');
			window.history.back();
			</script>
            <?php
			exit;
		}
		  
		$d = new stdClass();  
		$d->where = array('id' => $_SESSION['panel_id'],'password' => md5($current_password));   
		$q = $this->Portal_website_model->select_data($d);  
		
		if($q->num_rows == 1)
		{   
			$row = $q->result(); 
			$this_id = $row[0]->id;	 
			
			$d = new stdClass(); 
			$d->profile_email = $new_email;
			$d->last_update = date('U');    
			$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'id',md5($current_password),'password');
			  	
			$this->load->model('Portal_website_log_model'); 
			$this->Portal_website_log_model->add_log('Account Setting - Change E-mail',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
			$_SESSION['panel_profile_email'] = $new_email;
			?><meta charset="utf-8" />
			<script type="text/javascript">
			alert('<?php echo $this->lang->line('change_email_success'); ?>');
			window.location = '../../panels/<?php echo $this->mod ?>/change_email/';
			</script>
			<?php  
			exit;
		}
		else
		{
			?><meta charset="utf-8" />
            <script type="text/javascript">
			alert('<?php echo $this->lang->line('current_password_is_invalid'); ?>');
			window.history.back();
			</script>
            <?php
			exit;
		} 
	} 	
	
	public function change_password()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_sub_setting_account');
		$data['this_page'] = $this->lang->line('change_password');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		
		$data['config_mod'] = $this->mod;
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_change_password'); 
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,2,2);btn2stageFocus(0,1);';     
          
		$this->load->view('panel/' . $this->mod . '/change_password', $data); 
	}
	
	public function change_password_submit()
	{   
		$this->include_header(); 
 
		$current_password = $this->input->post('p1', TRUE);
		
		if(@$_SESSION['panel_login_web_user_login'] == '1')
		{
			$this->load->model('Portal_website_user_model'); 
			
			$d = new stdClass();  
			$d->where = array('u' => $_SESSION['panel_login_web_user_u'],'p' => md5($current_password));   
			$q = $this->Portal_website_user_model->select_data($d);  
			
			if($q->num_rows == 1)
			{   
				$row = $q->result(); 
				$this_id = $row[0]->id;	
				$new_password = $this->input->post('p2', TRUE);
				
				$d = new stdClass(); 
				$d->p = md5($new_password);   
				$this->Portal_website_user_model->update_data($d,$this_id,'id',md5($current_password),'p');
					
				$this->load->model('Portal_website_log_model'); 
				$this->Portal_website_log_model->add_log('Account Setting - Change Password',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
				
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $this->lang->line('change_password_success'); ?>');
				window.location = '../../panels/<?php echo $this->mod ?>/';
				</script>
				<?php  
				exit;
			}
			else
			{
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $this->lang->line('current_password_is_invalid'); ?>');
				window.history.back();
				</script>
				<?php
				exit;
			} 	
		}
		else
		{
			$this->load->model('Portal_website_model'); 
			
			$d = new stdClass();  
			$d->where = array('id' => $_SESSION['panel_id'],'password' => md5($current_password));   
			$q = $this->Portal_website_model->select_data($d);  
			
			if($q->num_rows == 1)
			{   
				$row = $q->result(); 
				$this_id = $row[0]->id;	
				$new_password = $this->input->post('p2', TRUE);
				
				$d = new stdClass(); 
				$d->password = md5($new_password);  
				$d->last_update = date('U');    
				$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'id',md5($current_password),'password');
					
				$this->load->model('Portal_website_log_model'); 
				$this->Portal_website_log_model->add_log('Account Setting - Change Password',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
				
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $this->lang->line('change_password_success'); ?>');
				window.location = '../../panels/<?php echo $this->mod ?>/';
				</script>
				<?php  
				exit;
			}
			else
			{
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo $this->lang->line('current_password_is_invalid'); ?>');
				window.history.back();
				</script>
				<?php
				exit;
			} 	
		}
		 
		
	} 	
}
?>