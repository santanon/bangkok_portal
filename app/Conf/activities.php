<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Activities
{  
	var $mod = 'activities'; 
	var $mod_model = 'Portal_website_activities_model'; 
	var $mod_title = 'Activities'; 
	
	var $mod_cat_mod = 'activities_cat'; 
	var $mod_cat_model = 'Portal_website_activities_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,10,2); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc';
	 
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
		$data['config_footer_js'] = 'mainmenuFocus(1,10,3); btn2stageFocus(0,2);';   
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);
		
		if(@$this->mod_cat_model <> '')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			if(count($data['list_cat']) == 0)
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $TextLanguage->lang('please_create_group') ?>');
				window.history.back(); 
				</script>
				<?php
				exit;
			} 
		}  
		 
		return $data;
		//return view('manage.'.$this->mod.'.add',$data);
		//$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;



		$uf = 'img1';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);

		  
		 
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE); 
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_group']."' ORDER BY sort DESC";	 	
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
		$d->cat_id = $CustomHelper->input_post('cat_id', TRUE);
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));  
		
		$d->info = htmlspecialchars_decode($CustomHelper->input_post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($CustomHelper->input_post('en_info', FALSE));  
		   
		$d->img1 = $img1.'^'.$_POST['img1_alt'].';'.$_POST['img1_alt_en'].';'.$_POST['img1_alt_sort'];
		
		$date_news_1 = 0;
		
		if(strlen($CustomHelper->input_post('date_news', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_news', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news = $date_news_1;
		
		$date_news_1_end = 0;
		
		if(strlen($CustomHelper->input_post('date_news_end', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_news_end', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1_end = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news_end = $date_news_1_end;
		
		 
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
		$d->can_review = $CustomHelper->input_post('can_review', TRUE);
		
		
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
			$data['edit_info'] = $row[0]->info;
			$data['edit_en_info'] = $row[0]->en_info;
			$data['edit_img1'] = $row[0]->img1;
			$data['edit_date_news'] = $row[0]->date_news; 
			$data['edit_date_news_end'] = $row[0]->date_news_end; 			
			$data['edit_date_start'] = $row[0]->date_start; 
			$data['edit_date_end'] = $row[0]->date_end; 
			$data['edit_date_set'] = $row[0]->date_set; 
			$data['edit_can_review'] = $row[0]->can_review;  			    
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    			 
			$data['config_mod'] = $this->mod; 
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit'); 
			$data['config_footer_js'] = 'mainmenuFocus(1,10,2); btn2stageFocus(0,1);'; 
			$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title);

			$data['get_alt'] = $CustomHelper->update_file_and_alt('img1',$row[0]->img1,$this->mod);
			$data['get_alt_en'] = $CustomHelper->update_file_and_alt_en('img1',$row[0]->img1,$this->mod);
			$data['get_alt_sort'] = $CustomHelper->update_file_and_alt_sort('img1',$row[0]->img1,$this->mod);
  
			if(@$this->mod_cat_model <> '')
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
				$data['list_cat'] = json_decode($res); 
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group']; 
			}           
			  
			//$this->load->view('panel/'.$this->mod.'/edit', $data); 
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


		$uf = 'img1';
		${$uf} = $CustomHelper->update_user_files($uf,$this->mod.'_'.$uf);
		  
		  
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE); 
		 
		$d = new \stdClass();  
		$d->cat_id = $CustomHelper->input_post('cat_id', TRUE); 
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));
		   
		$d->info = htmlspecialchars_decode($CustomHelper->input_post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($CustomHelper->input_post('en_info', FALSE));  
		 
		$d->img1 = $img1.'^'.$_POST['img1_alt'].';'.$_POST['img1_alt_en'].';'.$_POST['img1_alt_sort'];
		
		if(@$_POST['img1_delete'] == '1')
		{
			$d->img1 = '';
		}
		
		$d->last_update = date('U'); 
		
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE);  
		 
		$date_news_1 = 0;
		
		if(strlen($CustomHelper->input_post('date_news', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_news', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news = $date_news_1;
		
		
		$date_news_1_end = 0;
		
		if(strlen($CustomHelper->input_post('date_news_end', TRUE)) > 3)
		{
			$arr = explode('-',$CustomHelper->input_post('date_news_end', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1_end = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news_end = $date_news_1_end;
		
		
		 
		
		 
		
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
		$d->can_review = $CustomHelper->input_post('can_review', TRUE);
		 
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
        <?php  
	}
	public function edit_submit2()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
		$d = new \stdClass();  
		
		if($_SESSION['portal_lang'] == 'thai')
		{ 
			$d->info = htmlspecialchars_decode($CustomHelper->input_post('this_info', FALSE));   
		}
		else
		{
			$d->en_info = htmlspecialchars_decode($CustomHelper->input_post('this_info', FALSE)); 
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
		<script>
		window.history.back();
		</script>
        <?php  
		exit;
	}   
}
?>