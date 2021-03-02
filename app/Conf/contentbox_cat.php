<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Contentbox_cat
{  
	var $mod = 'contentbox_cat'; 
	var $mod_model = 'Portal_website_contentbox_model'; 
	var $mod_title = 'Content Box'; 
	
	var $mod_cat_mod = ''; 
	var $mod_cat_model = ''; 
	var $mod_cat_field = ''; 
	var $mod_cat_order_by = ''; 
	var $mod_cat_dropdown_title = ''; 
	var $config_dropdown_cat_file = '';
	
	 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,5); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status = true;
	
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
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_add');									   
		$data['config_footer_js'] = 'mainmenuFocus(1,1,5); btn2stageFocus(0,2);';  
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);
		
		$index = 0;
		$all_mod = array('Portal_website_news_cat_model','Portal_website_faq_cat_model','Portal_website_activities_cat_model','Portal_website_gallery_cat_model','Portal_website_vdo_cat_model','Portal_website_download_cat_model','Portal_website_banner_cat_model','Portal_website_question_cat_model','Portal_website_poll_cat_model');
		foreach($all_mod as $all)
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($all)." WHERE web_id = ? AND status = '1' ORDER BY title ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($all)),$q,$v);
			$r = json_decode($res); 
			
			$main_str[$index] = '';
			foreach ($r as $row_cat)
			{    
				$main_str[$index] = $main_str[$index] . '<option value="' . $row_cat->id . '">'.$row_cat->title.'</option>';
			}

			$index++;
		} 
		$data['main_str'] = $main_str;
		  
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
		$d->title = $_POST['a'];
		$d->en_title = $_POST['b'];
		$d->box_number = $_POST['box'];
		$d->box1 = $_POST['box'.($_POST['box']-1)];
		$d->box2 = '';
		$d->box3 = '';
		$d->box4 = '';
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
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_cat_id'] = $row[0]->cat_id;
			$data['edit_title'] = $row[0]->title; 
			$data['edit_en_title'] = $row[0]->en_title; 
			$data['edit_box_number'] = $row[0]->box_number;
			$data['edit_box1'] = $row[0]->box1; 
			$data['edit_box2'] = $row[0]->box2; 
			$data['edit_box3'] = $row[0]->box3; 
			$data['edit_box4'] = $row[0]->box4; 
			
			$data['edit_date_start'] = $row[0]->date_start; 
			$data['edit_date_end'] = $row[0]->date_end; 
			$data['edit_date_set'] = $row[0]->date_set; 
			    
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,5); btn2stageFocus(0,1);';   
			$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);
			     
			$index = 0; 
			$all_mod = array('Portal_website_news_cat_model','Portal_website_faq_cat_model','Portal_website_activities_cat_model','Portal_website_gallery_cat_model','Portal_website_vdo_cat_model','Portal_website_download_cat_model','Portal_website_banner_cat_model','Portal_website_question_cat_model','Portal_website_poll_cat_model');

			foreach($all_mod as $all)
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($all)." WHERE web_id = ? AND status = '1' ORDER BY title ASC";	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($all)),$q,$v);
				$r = json_decode($res); 
				
				$main_str[$index] = '';
				foreach ($r as $row_cat)
				{    
					$main_str[$index] = $main_str[$index] . '<option value="' . $row_cat->id . '">'.$row_cat->title.'</option>';
				}

				$index++;
			} 
			$data['main_str'] = $main_str;
			
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
		   
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE);  
		 
		$d = new \stdClass();      
		$d->title = $_POST['a'];
		$d->en_title = $_POST['b'];
		$d->box_number = $_POST['box'];
		$d->box1 = $_POST['box'.($_POST['box']-1)];
		$d->box2 = '';
		$d->box3 = '';
		$d->box4 = '';  
		$d->last_update = date('U');     
 
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
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$CustomHelper->input_post('id', TRUE)."'",''); 
		 
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');   
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php  } 
}
?>