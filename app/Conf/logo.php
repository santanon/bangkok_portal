<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Logo
{  
	var $mod = 'logo'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Logo';  
	var $mod_cat_field = ''; 
	var $config_search_field = array('');
	 
	public function index()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;	

		$data['get_alt'] = $CustomHelper->update_file_and_alt('url',$_SESSION['panel_style_logo_img1'],$this->mod);
		$data['get_alt_en'] = $CustomHelper->update_file_and_alt_en('url',$_SESSION['panel_style_logo_img1'],$this->mod);
		$data['get_alt_sort'] = $CustomHelper->update_file_and_alt_sort('url',$_SESSION['panel_style_logo_img1'],$this->mod);
	  
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');  
		$data['config_mod'] = $this->mod;     
		$data['config_header_info'] = $TextLanguage->lang('help_gallery_edit');
		$data['config_footer_js'] = 'mainmenuFocus(1,11,1); btn2stageFocus(0,2);';        
		  
		return $data;   
	} 
	
	public function url_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		$uf = 'url';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);
  
		$url = $url.'^'.$_POST['url_alt'].';'.$_POST['url_alt_en'].';'.$_POST['url_alt_sort'];

		$d = new \stdClass(); 
		$d->logo_type = '2';
		$d->logo_img1 = $url;
		$d->logo_url = $url;
		$d->logo_lastupdate = date('U');    
		 
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",'');
		
		  
		$CustomHelper->add_log(''.$this->mod_title.' - Change Logo ',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');   
		 
		$_SESSION['panel_style_logo_type'] = '2';
		$_SESSION['panel_style_logo_img1'] = $url;
		$_SESSION['panel_style_logo_url'] = $url;
		$_SESSION['panel_style_logo_lastupdate'] = date('U');     
		
  
		?> 
		<script>alert('บันทึกสำเร็จ');</script>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit_logo?m=' . $this->mod . '' ?>" />
		<?php
		exit;	
	}
}
?>