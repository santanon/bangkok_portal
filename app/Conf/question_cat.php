<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Question_cat
{  
	var $mod = 'question_cat'; 
	var $mod_model = 'Portal_website_question_cat_model'; 
	var $mod_title = 'Questionnaire Group'; 
	
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $mod_sub_model = 'Portal_website_question_submit_model'; 
	var $mod_sub_field = 'cat_id'; 
	var $mod_sub_mod = 'question'; 
	
	var $config_list_column_title = array('no.','name','in_use','data','last_create');
	var $config_list_column_width = array('70','','100','80','100');
	var $config_list_column_name = array('id','title','last_create','title','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,14,1); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	
	var $config_sort1 = 'sort'; 
	var $config_sort2 = 'asc';
	
	var $config_connect_page = true;
	 
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
		$data['config_footer_js'] = 'mainmenuFocus(1,14,1); btn2stageFocus(0,2);';        
		  
		return $data;
		//return view('manage.'.$this->mod.'.add',$data);
		//$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		  
	 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ?  ORDER BY sort DESC";	 	
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
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_title'] = $row[0]->title;
			$data['edit_en_title'] = $row[0]->en_title;  
			$data['edit_last_update'] = $row[0]->last_update; 			
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
			$data['config_footer_js'] = 'mainmenuFocus(1,14,1); btn2stageFocus(0,1);';        
			  
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
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));   
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
	
	public function export($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
	 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_sub_model)." WHERE web_id = ? AND cat_id = '".$v1."'";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_sub_model)),$q,$v);
		$q = json_decode($res);
		 
		 
		if(count($q) > 0)
		{  
			$data = '';
			$count_it = true;
			$header = ''.$TextLanguage->lang('no.').','.$TextLanguage->lang('name').','.$TextLanguage->lang('email').','.$TextLanguage->lang('telephone').','.$TextLanguage->lang('ip_address').','; 
			
			$run = 1;
			foreach ($q as $row)
			{  
				$line = '';
				
				$line .= $run.",";
				$line .= $row->title.",";
				$line .= $row->email.",";
				$line .= $row->tel.",";
				$line .= $row->ip.",";
				
				$q_arr = explode("[::]",$row->q_info);
				$a_arr = explode("[::]",$row->a_info);
				
				while($each_q_arr = each($q_arr))
				{
					$each_a_arr = each($a_arr);
					
					if($each_q_arr["value"] !== "")
					{
						$line .= $each_a_arr["value"].",";
						
						if($count_it)
						{
							$header = $header . $each_q_arr["value"] . ",";
						}
					}
				}
				
				$count_it = false; 
				$line .= date('d/m/Y [H:i:s]',$row->last_create).","; 
				$data .= trim($line)."\n";	  
				$run++;
			} 
			
			$header = $header . ''.$TextLanguage->lang('last_create').'';
			$data = str_replace("\r", "", $data);
			if ($data == "") 
			{
				$data = $TextLanguage->lang('no_data');
			}
			 
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=".$this->mod_title." ".date('Ymd').' '.date('his').".csv");
			header("Pragma: no-cache");
			header("Expires: 0");
			echo $header."\n".$data;
			
			exit;
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('no_data') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}   
	} 
}
?>