<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Social
{  
	var $mod = 'social'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Social'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('');
	var $config_list_column_width = array('');
	var $config_list_column_name = array(''); 
	
	var $config_submenu_title = array('edit');
	var $config_submenu_mod = array('edit');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,7); btn2stageFocus(0,1);';
	
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	
	public function lists($v1 = '0')
	{    
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
		<?php
		exit;
	}
	 
	public function edit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = '".$_SESSION['panel_id']."'";	 	
		$v = "";
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res); 
		  
		if(count($q) > 0)
		{  
			$row = $q;   
		 
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_social_option'] = $row[0]->social_option;
			$data['edit_social_id'] = $row[0]->social_id;
			$data['edit_social_layout'] = $row[0]->social_layout; 
			$data['edit_social_fb'] = $row[0]->social_fb;
			$data['edit_social_tw'] = $row[0]->social_tw;
			$data['edit_social_ins'] = $row[0]->social_ins;
			$data['edit_social_yt'] = $row[0]->social_yt; 
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,7); btn2stageFocus(0,1);';        
			  
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
		$d->social_option = $CustomHelper->input_post('social_option', TRUE);
		$d->social_layout = $CustomHelper->input_post('social_layout', TRUE);
		//$d->social_id = $CustomHelper->input_post('social_id', TRUE);   
		$d->social_fb = $CustomHelper->input_post('social_fb', TRUE); 
		$d->social_tw = $CustomHelper->input_post('social_tw', TRUE); 
		$d->social_ins = $CustomHelper->input_post('social_ins', TRUE); 
		$d->social_yt = $CustomHelper->input_post('social_yt', TRUE);   
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",'');
		    
 	
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		 
		?>
		<script>alert("บันทึกสำเร็จ");</script>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/edit_social?m='.$this->mod.'' ?>" />
        <?php  
		exit;	
	} 
}
?>