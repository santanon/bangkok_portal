<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Image_upload
{  
	var $mod = 'image_upload'; 
	var $mod_model = ''; 
	var $mod_title = 'Image Upload'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('');
	
	var $config_size_w = 500;
	var $config_size_h = 120;
	  
	public function index()
	{   
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/step1?m='.$this->mod.'' ?>" />
		<?php
		exit;	
	} 
	
	public function step1()
	{  
		$$CustomHelper = new \App\CustomHelper;
$TextLanguage = new \App\TextLanguage;
		  
		
		$data['title'] = '';
		
		$this->load->view('panel/' . $this->mod . '/step1', $data); 
	} 
	
	public function step2()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		
		$config['upload_path']	 = './upload/tmp/'; 
		
		$config['allowed_types'] = UPLOAD_IMG_TYPE;
		$config['max_size']		 = UPLOAD_IMG_SIZE; 
		
		$config['file_name'] 	 = session_id(); 
		$config['overwrite']	 = TRUE;   
		
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
		$this_file_ori = '';
		
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
			} 	
			 
			$config['image_library'] = 'gd2';
			$config['source_image']	= './upload/tmp/'.$this_file; 
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	= '500';  
			$config['height'] = 1; 
			$config['master_dim'] = 'width';
			
			$this->load->library('image_lib', $config); 
			$this->image_lib->resize();  
		}
		else
		{
			?><meta charset="utf-8" />
			<script type="text/javascript">
            alert('<?php echo $TextLanguage->lang('please_upload_file') ?>');
            window.history.back();
            </script>
            <?php  exit;
		} 
		
		$_SESSION['crop_image_thumb'] = $this_file;
		
		$data['size_w'] = $this->config_size_w;
		$data['size_h'] = $this->config_size_h;
		
		$data['redirect'] = '';
		
		if(isset($_POST['redirect']))
		{
			$data['redirect'] = $_POST['redirect'];	
		}
		
		$this->load->view('panel/' . $this->mod . '/step2', $data); 
	} 
	
	public function step3()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		
		$x1 = $_POST["x1"];
		$y1 = $_POST["y1"];
		$x2 = $_POST["x2"];
		$y2 = $_POST["y2"];
		$w = $_POST["w"];
		$h = $_POST["h"];
		
		$scale 				= $this->config_size_w/$w; 
		$thumb_image_name 	= './upload/tmp/'.$_SESSION['crop_image_thumb'];
		$image 				= './upload/tmp/'.$_SESSION['crop_image_thumb'];
		$width 				= $w;
		$height 			= $h;
		$start_width 		= $x1;
		$start_height 		= $y1;		 
		
		list($imagewidth, $imageheight, $imageType) = getimagesize($image);
		$imageType = image_type_to_mime_type($imageType);
		
		$newImageWidth = ceil($width * $scale);
		$newImageHeight = ceil($height * $scale);
		$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
		switch($imageType) {
			case "image/gif":
				$source=imagecreatefromgif($image); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				$source=imagecreatefromjpeg($image); 
				break;
			case "image/png":
			case "image/x-png":
				$source=imagecreatefrompng($image); 
				break;
		}
		imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
		switch($imageType) {
			case "image/gif":
				imagegif($newImage,$thumb_image_name); 
				break;
			case "image/pjpeg":
			case "image/jpeg":
			case "image/jpg":
				imagejpeg($newImage,$thumb_image_name,90); 
				break;
			case "image/png":
			case "image/x-png":
				imagepng($newImage,$thumb_image_name);  
				break;
		}
		chmod($thumb_image_name, 0777);
		
		$data['title'] = '';
		
		if(isset($_POST['redirect']))
		{
			$data['redirect'] = $_POST['redirect'];	
		}
		 
		$this->load->view('panel/' . $this->mod . '/step3', $data); 
	}
	
	public function step4()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		
		$ext = explode('.',$_SESSION['crop_image_thumb']);
		$ext = $ext[count($ext)-1];
		
		$new_file = 'logo_'.$_SESSION['panel_id'].'.'.$ext;
		
		if(copy('./upload/tmp/'.$_SESSION['crop_image_thumb'],'./upload/web/'.$new_file))
		{ 
			 
			$this->load->library('ftp'); 
			$config['hostname'] = FTP_HOST;
			$config['username'] = FTP_USERNAME;
			$config['password'] = FTP_PASSWORD;
			$config['debug']	= FTP_DEBUG; 
			$this->ftp->connect($config); 
			$this->ftp->upload('./upload/web/'.$new_file, FTP_PATH.'upload/web/'.$new_file, 'binary', 0775); 
			$this->ftp->close();
		 
			$d = new \stdClass(); 
			$d->logo_type = '1';
			$d->logo_img1 = $new_file;
			$d->logo_url = '';
			$d->logo_lastupdate = date('U');    
			 
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",'');
			
			
			$CustomHelper->add_log(''.$this->mod_title.'Change Logo',$_SESSION['panel_username'],$_SESSION['panel_id'],'LOGO_EDIT');
			 
			$_SESSION['panel_style_logo_type'] = '1';
			$_SESSION['panel_style_logo_img1'] = $new_file;
			$_SESSION['panel_style_logo_url'] = '';
			$_SESSION['panel_style_logo_lastupdate'] = date('U');    
		}
		else
		{
			?>
			<script type="text/javascript">
            alert('Cannot save logo!!!');
            window.history.back();
            </script>
            <?php  exit;
		}	
		 
		$data['title'] = '';
		
		$this_redirect = '';
		if(isset($_POST['redirect']))
		{
			$this_redirect = $_POST['redirect'];	
		}
			
		if($this_redirect == '')
		{
			$this->load->view('panel/' . $this->mod . '/to_intro', $data);
		}
		else
		{ 
			$this->load->view('panel/' . $this->mod . '/to_' . $this_redirect, $data);
		} 
	}
	
	public function reset_logo()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		
		@unlink('./upload/web/'.$_SESSION['panel_style_logo_img1']);
		 
		
		$d = new \stdClass(); 
		$d->logo_type = '';
		$d->logo_img1 = '';
		$d->logo_url = '';
		$d->logo_lastupdate = date('U');    
		 
		
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",'');
		
		
		  
		$CustomHelper->add_log(''.$this->mod_title.'Reset Logo',$_SESSION['panel_username'],$_SESSION['panel_id'],'LOGO_RESET');
		
		$_SESSION['panel_style_logo_type'] = '';
		$_SESSION['panel_style_logo_img1'] = '';
		$_SESSION['panel_style_logo_url'] = '';
		$_SESSION['panel_style_logo_lastupdate'] = date('U');    
		 
		$data['title'] = '';
		
		//redirect('/panel/intro/2');
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/intro2?m='.$this->mod.'' ?>" />
		<?php
		exit;	
	} 
	
	public function edit_logo()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		
		$data['title'] = '';
		
		$this->load->view('panel/' . $this->mod . '/edit_logo', $data); 
	} 
}
?>