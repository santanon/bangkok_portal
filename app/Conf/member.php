<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/member/
LOCATION : /application/controllers/panels/member.php
*/
 
class Member
{  
	var $mod = 'member'; 
	var $mod_model = 'Portal_website_member_model'; 
	var $mod_title = 'Member'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list');
	var $config_submenu_mod = array('lists');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,6,1); btn2stageFocus(0,1);';
	 
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = false;
	var $config_use_status= true;
	 
	public function add()
	{ 
		exit;
	}
	
	public function add_submit()
	{ 
		exit;
	} 
	
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
			$data['edit_title'] = $row[0]->title;
			$data['edit_lastname'] = $row[0]->lastname;
			$data['edit_username'] = $row[0]->username; 
			$data['edit_email'] = $row[0]->email;
			$data['edit_gender'] = $row[0]->gender;
			//$data['edit_birthday'] = $row[0]->birthday; 
			$data['edit_tel'] = $row[0]->tel;
			$data['edit_address'] = $row[0]->address;
			$data['edit_zip_code'] = $row[0]->zip_code;  
			$data['edit_province'] = $row[0]->province; 
			$data['edit_idcard'] = $row[0]->idcard;  
			$data['edit_img1'] = $row[0]->img1;  
			 
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,6,1); btn2stageFocus(0,1);';        
			  
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
		 
		$d = new stdClass();  
		
		$change_password = @$this->input->post('change_password', TRUE);  
		if($change_password == 1)
		{
			$password = $this->input->post('password', TRUE);  
		}
		$d->title = htmlspecialchars($this->input->post('title', TRUE)); 
		$d->lastname = $this->input->post('lastname', TRUE); 
		$d->email = $this->input->post('email', TRUE); 
		$d->gender = $this->input->post('gender', TRUE); 
		//$d->birthday = $this->input->post('birthday', TRUE); 
		$d->tel = $this->input->post('tel', TRUE); 
		$d->address = $this->input->post('address', TRUE); 
		$d->zip_code = $this->input->post('zip_code', TRUE); 
		$d->province = $this->input->post('province', TRUE); 
		$d->idcard = $this->input->post('idcard', TRUE); 
		
		
		
		$config['upload_path']	 = './upload/web/';
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
		
		if($_FILES['img1']['tmp_name'] <> '')
		{
			$this->load->library('upload', $config);
			 
			if(!$this->upload->do_upload('img1'))
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
				/*
				$this->load->library('ftp'); 
				$config['hostname'] = FTP_HOST;
				$config['username'] = FTP_USERNAME;
				$config['password'] = FTP_PASSWORD;
				$config['debug']	= FTP_DEBUG; 
				$this->ftp->connect($config); 
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/web/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
				*/
				
				$d->img1 = $this_file;   
			} 	
		}
		
		 		
		$change_password = @$this->input->post('change_password', TRUE);  
		if($change_password == 1)
		{
			$d->password = md5($password); 
		} 
		$d->last_update = date('U');   
		     
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>