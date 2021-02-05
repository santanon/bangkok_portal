<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
  
class Inbox
{  
	var $mod = 'inbox'; 
	var $mod_model = 'Portal_website_inbox_model'; 
	var $mod_title = 'Inbox'; 
	
	var $config_search_field = array('title','from_name');
	
	var $config_list_column_title = array('no.','subject','from','date');
	var $config_list_column_width = array('70','','120','100');
	var $config_list_column_name = array('id','title','from_name','last_create');  
	
	var $config_submenu_title = array('list_message','send_message');
	var $config_submenu_mod = array('lists','send');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'btn2stageFocus(0,1);';
	
	var $config_use_edit = false;
	var $config_use_delete = true;
	var $config_use_sort = false;
	
	var $mod_cat_field = 'flag_read'; 
	var $config_dropdown_cat_file = 'panel/include/list_cat_dropdown_inbox';
	var $mod_cat_dropdown_title = 'type'; 
	
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc'; 
	  
	public function read($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		 
		 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ?";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		
		 
		if(count($q) > 0)
		{  
			$row = $q;  
			
			$data['read_id'] = $row[0]->id;
			$data['read_web_id'] = $row[0]->web_id;
			$data['read_title'] = $row[0]->title;
			$data['read_info'] = $row[0]->info;
			$data['read_file1'] = $row[0]->file1;
			$data['read_from_id'] = $row[0]->from_id;
			$data['read_from_name'] = $row[0]->from_name;
			$data['read_flag_read'] = $row[0]->flag_read;
			$data['read_last_create'] = $row[0]->last_create; 
			
			$data['this_cat'] = $TextLanguage->lang('inbox');
			$data['this_page'] = $TextLanguage->lang('send_message');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');
			
			$d = new \stdClass();  
			$d->flag_read = '2';
			
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$data['read_id']."'",'');
			  
			$data['config_mod'] = $this->mod;       
			   
			$this->load->view('panel/inbox/read', $data); 
		}
		else
		{
			exit;	
		} 
	}
	
	public function send($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('send_message');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		
		if($v1 <> '0')
		{
			 
		
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$v1."'";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
			$q = json_decode($res);
			 
			if(count($q) > 0)
			{  
				$row = $q;  
				 
				$data['read_reply'] = 1;
				$data['read_id'] = $row[0]->id;
				$data['read_web_id'] = $row[0]->web_id;
				$data['read_title'] = 'RE: ' . $row[0]->title;
				$data['read_info'] = '<br><br>--------------------------------------------------<br>' . $row[0]->from_name . ' : ' . $row[0]->info;
				$data['read_file1'] = $row[0]->file1;
				$data['read_from_id'] = $row[0]->from_id;
				$data['read_from_name'] = $row[0]->from_name;
				$data['read_flag_read'] = $row[0]->flag_read;
				$data['read_last_create'] = $row[0]->last_create; 
				 
		
				 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE id = ?";	 	
				$v = $data['read_from_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
				$q = json_decode($res);
				 
				 
				if(count($q) > 0)
				{ 
					$row = $q;  
				 
					$data['read_username'] = $row[0]->username;
				} 
				else if($data['read_from_id'] == '999999')
				{
					$data['read_username'] = 'Admin';
				}
			}
		}
		
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_add');
									   
		$data['config_footer_js'] = 'btn2stageFocus(0,2);';    
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);      
		  
		$this->load->view('panel/inbox/send', $data); 
	}
	
	public function send_submit()
	{ 
		$username = $CustomHelper->input_post('username', TRUE);
		 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		  
		
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE username = ?";	 	
		$v = $username;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
		$q = json_decode($res);
		
		
		
		if(count($q) > 0 || $username == 'Admin')
		{  
			$config['upload_path']	 = './upload/inbox/';
			$config['allowed_types'] = UPLOAD_FILE_TYPE;
			$config['max_size']		 = UPLOAD_FILE_SIZE;   
			
			/*
			$config['file_name'] 	 = 'file1'; 
			$config['overwrite']	 = FALSE;  
			$config['max_width']	 = '0'; 
			$config['max_height']	 = '0'; 
			$config['max_filename']	 = '255'; 
			$config['encrypt_name']	 = FALSE;
			$config['remove_spaces'] = TRUE;  
			*/
			
			$this_file = '';
			
			if($_FILES['file1']['tmp_name'] <> '')
			{
				$this->load->library('upload', $config);
				 
				if(!$this->upload->do_upload('file1'))
				{
					?>
                    <meta charset="utf-8" />
					<script type="text/javascript">
					alert('<?php echo strip_tags($this->upload->display_errors()) ?>');
					window.history.back();
					</script>
					<?php  exit;
				}
				else
				{
					$arr = $this->upload->data();   
					$this_file = $arr['file_name'];
					 
					$this->load->library('ftp'); 
					$config['hostname'] = FTP_HOST;
					$config['username'] = FTP_USERNAME;
					$config['password'] = FTP_PASSWORD;
					$config['debug']	= FTP_DEBUG; 
					$this->ftp->connect($config); 
					$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/inbox/'.$this_file, 'binary', 0775); 
					$this->ftp->close();
					 
				} 	
			}
			 
			if($username == 'Admin')
			{
				$this_id = 999999;
			}
			else
			{
				$row = $q; 
				$this_id = $row[0]->id;		
			}
			 
			  
			$d = new \stdClass(); 
			$d->web_id = $this_id; 
			$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
			$d->info = $CustomHelper->input_post('info', FALSE);
			$d->file1 = $this_file;
			$d->from_id = $_SESSION['panel_id'];
			$d->from_name = $_SESSION['panel_profile_name'] . ' ' . $_SESSION['panel_profile_lastname'];
			$d->flag_read = 1; 
			$d->last_create = date('U');    
			$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"INSERT INTO ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr."",'');  
		 	 
			$CustomHelper->add_log(''.$this->mod_title.'Inbox - Send Message ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_SEND');
			
			?>
            <meta charset="utf-8" />
			<script type="text/javascript">
			alert('<?php echo $TextLanguage->lang('send_message_success'); ?>'); 
			window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>';
			</script>
			<?php  
			exit;
		}
		else
		{
			?>
            <meta charset="utf-8" />
            <script type="text/javascript">
			alert('<?php echo $TextLanguage->lang('username_does_not_exist'); ?>');
			window.history.back();
			</script>
            <?php
			exit;
		} 
	} 	
}
?>