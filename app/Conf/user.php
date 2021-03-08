<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class User
{  
	var $mod = 'user'; 
	var $mod_model = 'Portal_website_user_model'; 
	var $mod_title = 'User'; 

	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','Username','name','section','last_create');
	var $config_list_column_width = array('70','','','','100');
	var $config_list_column_name = array('id','u','title','section','last_create'); 
	
	var $config_submenu_title = array('list');
	var $config_submenu_mod = array('lists');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,6,1); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = false;
	var $config_use_status= true;

	var $config_sort1 = 'sort'; 
	var $config_sort2 = 'asc';
	 
	public function add()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');  
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		$data['config_header_info'] = $TextLanguage->lang('help_faq_add');
		$data['config_footer_js'] = 'mainmenuFocus(1,10,1); btn2stageFocus(0,2);';        
		  
		return $data;
		//return view('manage.'.$this->mod.'.add',$data);
		//$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ORDER BY sort DESC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		  
		$sort = '1';
		if(count($q) > 0)
		{  
			$row = $q; 
			$sort = $row[0]->sort;	 
			$sort = $sort + 1;
		} 
		 
		$d = new \stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));  
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1';
		
		
		$date_1 = 0;
		
		if(strlen($CustomHelper->input_post('date_start', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_start', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$date_2 = 0;
		
		if(strlen($CustomHelper->input_post('date_end', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_end', TRUE));
			$end_d = $arr[0];
			$end_m = $arr[1];
			$end_y = $arr[2];
			
			$date_2 = mktime(23,59,59,$end_m,$end_d,$end_y);
		} 
		
		$d->date_start = $date_1;
		$d->date_end = $date_2;
		$d->date_set = $CustomHelper->input_post('date_set', TRUE);
		
		
		 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"INSERT INTO ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr."",'');  
		 
		$CustomHelper->add_log(''.$this->mod_title.' - Add ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');    
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php  } 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND id = ?";	 	
		$v = $v1;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res); 
		  
		if(count($q) > 0)
		{  
			$row = $q;    
			
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('add');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');  
			$data['config_mod'] = $this->mod; 
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			$data['config_header_info'] = $TextLanguage->lang('help_faq_add');
			$data['config_footer_js'] = 'mainmenuFocus(1,10,1); btn2stageFocus(0,2);'; 
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id; 
			/*$data['edit_title'] = $row[0]->title;
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
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');   */ 			 
			$data['config_mod'] = $this->mod; 			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');										   
			$data['config_footer_js'] = 'mainmenuFocus(1,6,1); btn2stageFocus(0,1);';        
			  
			return $data; 
		}
		else
		{
			exit;	
		}  
	}	
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		  
		  
		 
		$d = new \stdClass();  
		
		$change_password = @$CustomHelper->input_post('change_password', TRUE);  
		if($change_password == 1)
		{
			$password = $CustomHelper->input_post('password', TRUE);  
		}
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE)); 
		$d->lastname = $CustomHelper->input_post('lastname', TRUE); 
		$d->email = $CustomHelper->input_post('email', TRUE); 
		$d->gender = $CustomHelper->input_post('gender', TRUE); 
		//$d->birthday = $CustomHelper->input_post('birthday', TRUE); 
		$d->tel = $CustomHelper->input_post('tel', TRUE); 
		$d->address = $CustomHelper->input_post('address', TRUE); 
		$d->zip_code = $CustomHelper->input_post('zip_code', TRUE); 
		$d->province = $CustomHelper->input_post('province', TRUE); 
		$d->idcard = $CustomHelper->input_post('idcard', TRUE); 
		
		
		
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
		
		 		
		$change_password = @$CustomHelper->input_post('change_password', TRUE);  
		if($change_password == 1)
		{
			$d->password = md5($password); 
		} 
		$d->last_update = date('U');   
		     
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$CustomHelper->input_post('id', TRUE)."'",'');    
 	
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');   
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php  } 
}
?>