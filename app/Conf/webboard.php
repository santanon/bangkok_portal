<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/webboard/
LOCATION : /application/controllers/panels/webboard.php
*/
 
class Webboard
{  
	var $mod = 'webboard'; 
	var $mod_model = 'Portal_website_webboard_model'; 
	var $mod_title = 'Webboard'; 
	
	var $mod_cat_mod = 'webboard_cat'; 
	var $mod_cat_model = 'Portal_website_webboard_cat_model'; 
	var $mod_cat_field = 'room_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $mod_cat_dropdown_title = 'webboard_cat'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','reply','last_update');
	var $config_list_column_width = array('70','','70','100');
	var $config_list_column_name = array('id','title','no_reply','last_update'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,12,3); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = false;
	var $config_use_status= true;
	
	var $config_sort1 = 'last_post_date'; 
	var $config_sort2 = 'desc';
	 
	public function add()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		 
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_add');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,12,4); btn2stageFocus(0,2);';       
		$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title); 
		
		if($this->mod_cat_model <> '')
		{
			$this->load->model($this->mod_cat_model);
			
			$d = new stdClass();  
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			if($data['list_cat']->num_rows == '0')
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $this->lang->line('please_create_group') ?>');
				window.location = '<?php echo base_url() . 'panels/' . $this->mod . '_cat' ?>';
				</script>
				<?php
				exit;
			}
		}    
		  
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{ 
		$this->include_header();  
		$this->load->model($this->mod_model);  
		 
		
		$config['upload_path']	 = './upload/webboard/';
		$config['allowed_types'] = UPLOAD_BOARD_TYPE;
		$config['max_size']		 = UPLOAD_BOARD_SIZE;   
	 
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
				?><meta charset="utf-8" />
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
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/webboard/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
				 
			} 	
		}
		 
		$d = new stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->room_id = $this->input->post('cat_id', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		
		//$d->info = $this->input->post('info', FALSE);  
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));   
		   
		$d->file1 = $this_file;
		$d->post_user = '<b>WEBMASTER</b>';
		$d->post_id = 0;
		$d->ip = $_SERVER['REMOTE_ADDR'];
		$d->no_view = 0;
		$d->no_reply = 0;
		$d->last_post_user = '<b>WEBMASTER</b>';
		$d->last_post_date = date('U');  
		$d->last_create = date('U');  
		$d->last_update = date('U');     
		$d->status = '1';
		
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE);
		 
		$this->{$this->mod_model}->add_data($d);    
			
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Add (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
	
	public function edit($v1 = '0')
	{ 
		$this->include_header(); 
		 
		$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id' => $v1,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_room_id'] = $row[0]->room_id;
			$data['edit_title'] = $row[0]->title; 
			$data['edit_info'] = $row[0]->info;
			$data['edit_file1'] = $row[0]->file1;
			$data['edit_post_user'] = $row[0]->post_user; 
			$data['edit_post_id'] = $row[0]->post_id;
			$data['edit_ip'] = $row[0]->ip;  
			$data['edit_no_view'] = $row[0]->no_view;  
			$data['edit_no_reply'] = $row[0]->no_reply; 
			$data['edit_last_post_user'] = $row[0]->last_post_user; 
			$data['edit_last_post_date'] = $row[0]->last_post_date;  
			$data['edit_last_create'] = $row[0]->last_create; 
			$data['edit_last_update'] = $row[0]->last_update; 
			$data['edit_status'] = $row[0]->status;  
			    
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,12,3); btn2stageFocus(0,1);';  
			$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title);      
			
			if($this->mod_cat_model <> '')
			{
				$this->load->model($this->mod_cat_model);
				
				$d = new stdClass();  
				$d->orderby = $this->mod_cat_order_by;
				$d->where = array('web_id'=>$_SESSION['panel_id']);
				$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			}  
			
			$this->load->model('Portal_website_webboard_reply_model');
			$d = new stdClass();  
			$d->where = array('topic_id'=>$v1);
			$d->orderby = 'id ASC';
			$data['list_reply'] = $this->Portal_website_webboard_reply_model->select_data($d);   
			 
			$this->load->view('panel/'.$this->mod.'/edit', $data); 
		}
		else
		{
			exit;	
		}  
	}	
	
	public function edit_submit()
	{ 
		$this->include_header(); 
		$this->load->model($this->mod_model); 
	 
		$config['upload_path']	 = './upload/webboard/'; 
		$config['allowed_types'] = UPLOAD_BOARD_TYPE;
		$config['max_size']		 = UPLOAD_BOARD_SIZE;   
		
		/*
		$config['file_name'] 	 = 'file1'; 
		$config['overwrite']	 = FALSE;  
		$config['max_width']	 = '0'; 
		$config['max_height']	 = '0'; 
		$config['max_filename']	 = '255'; 
		$config['encrypt_name']	 = FALSE;
		$config['remove_spaces'] = TRUE;  
		*/
		 
		$d = new stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->room_id = $this->input->post('cat_id', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		
		//$d->info = $this->input->post('info', FALSE);
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));    
		
		if($_FILES['file1']['tmp_name'] <> '')
		{
			$this->load->library('upload', $config);
			 
			if(!$this->upload->do_upload('file1'))
			{
				?><meta charset="utf-8" />
				<script type="text/javascript">
				alert('<?php echo strip_tags($this->upload->display_errors()) ?>');
				window.history.back();
				</script>
				<?php  exit;
			}
			else
			{
				$arr = $this->upload->data();    
				$d->file1 = $arr['file_name'];    
				$this_file = $arr['file_name'];
				 
				$this->load->library('ftp'); 
				$config['hostname'] = FTP_HOST;
				$config['username'] = FTP_USERNAME;
				$config['password'] = FTP_PASSWORD;
				$config['debug']	= FTP_DEBUG; 
				$this->ftp->connect($config); 
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/webboard/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
			} 	
		}
		 
		$d->post_user = '<b>WEBMASTER</b>';
		$d->post_id = 0;
		$d->ip = $_SERVER['REMOTE_ADDR']; 
		$d->last_post_user = '<b>WEBMASTER</b>';
		$d->last_post_date = date('U');   
		$d->last_update = date('U');     
		$d->status = '1';
		
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE);
		     
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  }  
	
	public function reply_add_submit()
	{ 
		$this->include_header();  
		$this->load->model('Portal_website_webboard_reply_model');  
		 
		$config['upload_path']	 = './upload/webboard/';
		
		$config['allowed_types'] = UPLOAD_BOARD_TYPE;
		$config['max_size']		 = UPLOAD_BOARD_SIZE;    
		
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
				?><meta charset="utf-8" />
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
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/webboard/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
				 
			} 	
		}
		 
		$d = new stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->room_id = $this->input->post('room_id', TRUE);
		$d->topic_id = $this->input->post('topic_id', TRUE);
		 
		//$d->info = $this->input->post('info', FALSE);  
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));   
		   
		$d->file1 = $this_file;
		$d->post_user = '<b>WEBMASTER</b>';
		$d->post_id = 0;
		$d->ip = $_SERVER['REMOTE_ADDR'];   
		$d->last_create = date('U');  
		$d->last_update = date('U');     
		$d->status = '1';
		  
		$this->Portal_website_webboard_reply_model->add_data($d); 
		
		
		
		$this->load->model($this->mod_model); 
		$d = new stdClass(); 
		$d->where = array('id'=>$this->input->post('topic_id', TRUE));
		$re = $this->{$this->mod_model}->select_data($d);    
		$ro = $re->result();
		$no_reply = $ro[0]->no_reply + 1;
		
		$this->load->model($this->mod_model); 
		$d = new stdClass(); 
		$d->no_reply = $no_reply;
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('topic_id', TRUE),'id');    
		
		   
			
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Add Reply (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');  
		
		//redirect('/panels/' . $this->mod . '/edit/' . $this->input->post('topic_id', TRUE) . '#add_new'); 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit/' . $this->input->post('topic_id', TRUE) . '#add_new' ?>" />
        <?php
        exit;
	}  
	
	public function reply_edit_submit()
	{ 
		$this->include_header();  
		$this->load->model('Portal_website_webboard_reply_model');  
		 
		$config['upload_path']	 = './upload/webboard/';
		$config['allowed_types'] = UPLOAD_BOARD_TYPE;
		$config['max_size']		 = UPLOAD_BOARD_SIZE;   
		
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
				?><meta charset="utf-8" />
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
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/webboard/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
				 
			} 	
		}
		 
		$d = new stdClass(); 
		   
		//$d->info = $this->input->post('info', FALSE);   
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));   
		  
		$d->file1 = $this_file;
		$d->post_user = '<b>WEBMASTER</b>';
		$d->post_id = 0;
		$d->ip = $_SERVER['REMOTE_ADDR'];   
		$d->last_update = date('U');     
		$d->status = '1';
		  
		$this->Portal_website_webboard_reply_model->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');   
		
		    
		 
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit Reply (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/edit/' . $this->input->post('topic_id', TRUE) . '#edit_' . $this->input->post('id', TRUE));
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit/' . $this->input->post('topic_id', TRUE) . '#edit_' . $this->input->post('id', TRUE) ?>" />
        <?php
        exit;
	}  
	
	public function reply_delete($v1,$v2)
	{ 
		$this->include_header();  
		$this->load->model('Portal_website_webboard_reply_model');  
		$this->Portal_website_webboard_reply_model->delete_data($_SESSION['panel_id'],'web_id',$v1,'id'); 	
		  
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Delete Reply (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_DELETE');  
		
		$this->load->model($this->mod_model); 
		$d = new stdClass(); 
		$d->where = array('id'=>$v2);
		$re = $this->{$this->mod_model}->select_data($d);    
		$ro = $re->result();
		$no_reply = $ro[0]->no_reply - 1;
		
		$this->load->model($this->mod_model); 
		$d = new stdClass(); 
		$d->no_reply = $no_reply;
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$v2,'id');   
		
		//redirect('/panels/' . $this->mod . '/edit/' .$v2 . '#add_new');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/edit/' .$v2 . '#add_new' ?>" />
        <?php
        exit;
		
	}  
}
?>