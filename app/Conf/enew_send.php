<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Enew_send
{  
	var $mod = 'enew_send'; 
	var $mod_model = 'Portal_website_enew_model'; 
	var $mod_title = 'Send E-Newletter'; 
	 
	var $mod_cat_mod = 'enew_cat';  
	var $mod_cat_model = 'Portal_website_enew_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('form');
	var $config_submenu_mod = array('form');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,16,1); btn2stageFocus(0,1);';
	
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	 
	public function index()
	{  
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/form?m='.$this->mod.'' ?>" />
		<?php
		exit;	
	}
	
	public function form()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('form');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_add');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,16,3); btn2stageFocus(0,1);';  
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);       
		 
		if(@$this->mod_cat_model <> '')
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			$list = $data['list_cat'];
		
			foreach ($list as $row)
			{  
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE ".$this->mod_cat_field." = ?";	 	
				$v = $row->id;
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
				$q = json_decode($res);  
				
				$data['list_cat_count'][] = count($q);    
			}   
		}
		 
		return $data;
		//return view('manage.'.$this->mod.'.add',$data);
		//$this->load->view('panel/'.$this->mod.'/add', $data); 
	}  
	
	public function send_submit()
	{ 
		$cat_id = $CustomHelper->input_post('cat_id', TRUE);
		$title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		//$info = $CustomHelper->input_post('info', FALSE);
		$info = htmlspecialchars_decode($CustomHelper->input_post('info', FALSE));  
		 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		$this->load->library('email'); 
		$this->email->from($_SESSION['panel_profile_email'], $_SESSION['panel_profile_name'] . ' ' . $_SESSION['panel_profile_lastname']);
		 
		if($cat_id == 'all')
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." ORDER BY title ASC";	 	
		}
		else
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE cat_id = '".$cat_id."' ORDER BY title ASC";	  
		}
		 
		$v = '';
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		  
		foreach ($q as $row)
		{   
			$this->email->to($row->title);     
			echo $row->title . '<br>';
		}   	
		  
		$this->email->bcc('anurakball@gmail.com');  
		$this->email->subject($title);
		$this->email->message($info);	
		
		echo '<br><br><br>'.$info;
		exit;
		 
		//$this->email->send(); 
		//echo $this->email->print_debugger();  
	} 
}
?>