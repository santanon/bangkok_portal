<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Contactus
{  
	var $mod = 'contactus'; 
	var $mod_model = 'Portal_website_contactus_model'; 
	var $mod_title = 'Contact Us'; 
	
	var $config_search_field = array('title');
	
	var $config_list_column_title = array('no.','subject','from','date');
	var $config_list_column_width = array('70','','120','100');
	var $config_list_column_name = array('id','title','contact_name','last_create');  
	
	var $config_submenu_title = array('list_message','information');
	var $config_submenu_mod = array('lists','info');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,9); btn2stageFocus(0,1);';
	
	var $config_use_edit = false;
	var $config_use_delete = true;
	var $config_use_sort = false;
	
	var $mod_cat_field = ''; 
	var $config_dropdown_cat_file = '';
	var $mod_cat_dropdown_title = ''; 
	
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc'; 
	  
	public function read($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ORDER BY id DESC";	 	
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
			$data['read_contact_name'] = $row[0]->contact_name;
			$data['read_contact_email'] = $row[0]->contact_email;
			$data['read_contact_address'] = $row[0]->contact_address;
			$data['read_contact_tel'] = $row[0]->contact_tel;
			$data['read_last_create'] = $row[0]->last_create; 
			$data['read_ip'] = $row[0]->ip;
			
			$data['this_cat'] = $TextLanguage->lang('contactus');
			$data['this_page'] = $TextLanguage->lang('information');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');
			 
			$data['config_mod'] = $this->mod;       
			   
			return $data;
		} 
	}
	
	public function info()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_style_model')." WHERE id > 0 AND web_id = ?";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),$q,$v);
		$q = json_decode($res); 
		
		 
		 
		if(count($q) > 0)
		{  
			$row = $q;  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_contact_text_1'] = $row[0]->contact_text_1;
			$data['edit_contact_text_2'] = $row[0]->contact_text_2;  
			$data['edit_contact_text_3'] = $row[0]->contact_text_3;
			$data['edit_contact_text_4'] = $row[0]->contact_text_4;  
			     
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,9); btn2stageFocus(0,2);';        
			  
			return $data;
		}
		else
		{
			exit;	
		}  
	}	
	
	public function info_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		   
		 
		$d = new \stdClass();   
		$d->contact_text_1 = htmlspecialchars_decode($CustomHelper->input_post('contact_text_1', FALSE)); 
		$d->contact_text_2 = htmlspecialchars_decode($CustomHelper->input_post('contact_text_2', FALSE)); 
		
		/* 
		echo $d->contact_text_1;
		echo "<br>";
		echo $d->contact_text_2;
		 */
		   
		$d->contact_text_3 = $CustomHelper->input_post('contact_text_3', FALSE); 
		$d->contact_text_4 = $CustomHelper->input_post('contact_text_4', FALSE); 
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$CustomHelper->input_post('id', TRUE)."'",'');
		 
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');   
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/contact_info1?m='.$this->mod.'' ?>" />
        <?php
        exit;	
	}  	
}
?>