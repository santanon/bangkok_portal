<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Copyright
{  
	var $mod = 'copyright'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Copy Right'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('');
	var $config_list_column_width = array('');
	var $config_list_column_name = array(''); 
	
	var $config_submenu_title = array('edit');
	var $config_submenu_mod = array('edit');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,6); btn2stageFocus(0,1);';
	
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
	 
	public function edit($v1)
	{    	
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_style_model')." WHERE web_id = '".$_SESSION['panel_id']."'";
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),$q,$v);
		$q = json_decode($res); 
		  
		if(count($q) > 0)
		{  
			$row = $q;	
			 
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_copyright_option'] = $row[0]->copyright_option;
			$data['edit_copyright_info'] = $row[0]->copyright_info; 
			$data['edit_copyright_info_en'] = $row[0]->copyright_info_en; 
			$data['edit_call_center_info'] = $row[0]->call_center_info; 			     
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    			 
			$data['config_mod'] = $this->mod; 			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,6); btn2stageFocus(0,1);';        
			  
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
		$d->copyright_info = $CustomHelper->input_post('copyright_info', TRUE); 
		$d->copyright_info_en = $CustomHelper->input_post('copyright_info_en', TRUE); 
		$d->call_center_info = $CustomHelper->input_post('call_center_info', TRUE); 
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