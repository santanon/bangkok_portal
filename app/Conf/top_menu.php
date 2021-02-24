<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

class Top_menu
{  
	var $mod = 'top_menu'; 
	var $mod_model = 'Portal_website_top_menu_page_model'; 
	var $mod_title = 'Top Menu'; 
	
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $mod_sub_model = 'Portal_website_page_model'; 
	var $mod_sub_field = 'cat_id'; 
	
	var $config_list_column_title = array('no.','name','type','last_create');
	var $config_list_column_width = array('70','','110','100');
	var $config_list_column_name = array('id','title','page_type','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,4,2); btn2stageFocus(0,1);';
	
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
		 
		if(empty($_SESSION[$this->mod.'_group_page']))
		{
			$_SESSION[$this->mod.'_group_page'] = '0';
		}
		 
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    		  
		$data['config_mod'] = $this->mod; 		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   		
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_add');									     
		$data['config_footer_js'] = 'mainmenuFocus(1,4,2); btn2stageFocus(0,2);';        
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title); 
		
		if(@$this->mod_cat_model <> '')
		{ 
			if(empty($_SESSION[$this->mod.'_group']))
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND have_submenu = '2' ORDER BY ".$this->mod_cat_order_by;	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
				$data['check_cat'] = json_decode($res); 
				  
				if(count($data['check_cat']) == '0')
				{
					?><meta charset="utf-8" />
					<script>
                    alert('<?php echo $TextLanguage->lang('please_create_group') ?>');
                    window.history.back();
                    </script>
                    <?php
                    exit;
				}
				else
				{
					$q = $data['check_cat'];
					$_SESSION[$this->mod.'_group'] = $q[0]->id;	
				} 
			}
			
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND id = '".$_SESSION[$this->mod.'_group']."' ORDER BY ".$this->mod_cat_order_by;	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
		  
			$str_navi = '';
			if($_SESSION[$this->mod.'_group_page'] > 0)
			{ 
				$start_loop = true;
				$this_id = $_SESSION[$this->mod.'_group_page'];
				while($start_loop)
				{ 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND id = '".$this_id."'";	 	
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);       
					$ro = json_decode($res);
					
					$str_navi = ' / ' . $ro[0]->title . '  ' . $str_navi;
					
					if($ro[0]->page_id == '0')
					{
						$start_loop = false;	
					}
					else
					{
						$this_id = $ro[0]->page_id;
					}
				} 
			}
			$data['list_str_navi'] = $str_navi;
		}  
		  
		$model_arr = array('Portal_website_activities_cat_model','Portal_website_banner_cat_model','Portal_website_download_cat_model','Portal_website_enew_cat_model','Portal_website_faq_cat_model','Portal_website_gallery_cat_model','Portal_website_news_cat_model','Portal_website_poll_cat_model','Portal_website_question_cat_model','Portal_website_webboard_cat_model','Portal_website_vdo_cat_model');
		
		foreach($model_arr as $each_model)
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($each_model)." WHERE web_id = ? ORDER BY id ASC";		
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($each_model)),$q,$v);
			$data[$each_model] = json_decode($res); 			
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
		  
		  
		  
		$str_model = '';
		$str_path = '';
		$redirect_new = false; 
		$sub_new_id = '';
		  
		if($CustomHelper->input_post('page_type_'.$CustomHelper->input_post('page_type', TRUE), TRUE) == 'new')
		{  
			if($CustomHelper->input_post('page_type', TRUE) == 'news')
			{
				$str_model = 'Portal_website_news_cat_model';
				$str_path = 'news';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'calendar')
			{
				$str_model = 'Portal_website_activities_cat_model';
				$str_path = 'activities';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'faq')
			{
				$str_model = 'Portal_website_faq_cat_model';
				$str_path = 'faq';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'gallery')
			{
				$str_model = 'Portal_website_gallery_cat_model';
				$str_path = 'gallery';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'banner')
			{
				$str_model = 'Portal_website_banner_cat_model';
				$str_path = 'banner';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'download')
			{
				$str_model = 'Portal_website_download_cat_model';
				$str_path = 'download';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'question')
			{
				$str_model = 'Portal_website_question_cat_model';
				$str_path = 'question';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'poll')
			{
				$str_model = 'Portal_website_poll_cat_model';
				$str_path = 'poll';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'webboard')
			{
				$str_model = 'Portal_website_webboard_cat_model';
				$str_path = 'webboard';
				$redirect_new = true; 
			}
			if($CustomHelper->input_post('page_type', TRUE) == 'vdo')
			{
				$str_model = 'Portal_website_vdo_cat_model';
				$str_path = 'vdo';
				$redirect_new = true; 
			}
			
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($str_model)." WHERE web_id = ? ORDER BY sort DESC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($str_model)),$q,$v);
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
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($str_model)),"INSERT INTO ".$CustomHelper->model_to_table($str_model)." SET ".$this_qr."",'');  
			
			
			
			
			
			
			
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($str_model)." WHERE web_id = ? ORDER BY id DESC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($str_model)),$q,$v);
			$q = json_decode($res); 
			$row = $q; 
			
			$sub_new_id = $row[0]->id; 
		} 
		  
		 
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
		 
		$d->img1 = $img1.'^'.$_POST['img1_alt'].';'.$_POST['img1_alt_en'].';'.$_POST['img1_alt_sort'];

		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));  
		$d->page_type = $CustomHelper->input_post('page_type', TRUE);
		 
		$d->info = htmlspecialchars_decode($CustomHelper->input_post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($CustomHelper->input_post('en_info', FALSE));
		
		$d->url = $CustomHelper->input_post('url', TRUE);
		$d->en_url = $CustomHelper->input_post('en_url', TRUE);
		$d->url_target = $CustomHelper->input_post('url_target', TRUE);
		 
		if($CustomHelper->input_post('page_type_'.$CustomHelper->input_post('page_type', TRUE), TRUE) == 'new')
		{
			$d->data_id = $sub_new_id;
		}
		else
		{
			$d->data_id = $CustomHelper->input_post('page_type_'.$CustomHelper->input_post('page_type', TRUE), TRUE); 	
		}
		 
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
		










		
		if($redirect_new)
		{ 
			?>
            <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/set_cat?m='.$str_path.'&id='.$sub_new_id ?>" />
            <?php	
			exit; 
		}
		else
		{ 
			?>
			<meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
			<?php	
			exit;
		} 
	} 
	
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
			
			$data['edit_page_type'] = $row[0]->page_type;
			$data['edit_info'] = $row[0]->info;
			$data['edit_en_info'] = $row[0]->en_info;
			$data['edit_img1'] = $row[0]->img1;
			$data['edit_url'] = $row[0]->url;
			$data['edit_en_url'] = $row[0]->en_url;
			$data['edit_url_target'] = $row[0]->url_target;
			$data['edit_date_news'] = $row[0]->date_news;
			$data['edit_data_id'] = $row[0]->data_id;
			
			$data['edit_can_review'] = $row[0]->can_review;
			 
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
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,4,2); btn2stageFocus(0,1);';   
			$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title); 
			
			$data['get_alt'] = $CustomHelper->update_file_and_alt('img1',$row[0]->img1,$this->mod);
			$data['get_alt_en'] = $CustomHelper->update_file_and_alt_en('img1',$row[0]->img1,$this->mod);
			$data['get_alt_sort'] = $CustomHelper->update_file_and_alt_sort('img1',$row[0]->img1,$this->mod);
			 
			if(@$this->mod_cat_model <> '')
			{
				if(empty($_SESSION[$this->mod.'_group']))
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = '".$_SESSION['panel_id']."' ORDER BY ".$this->mod_cat_order_by;	 	
					$v = $v1;
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
					$data['check_cat'] = json_decode($res); 
					$q = $data['check_cat'];
					$_SESSION[$this->mod.'_group'] = $q[0]->id; 
				}
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND id = ? ORDER BY ".$this->mod_cat_order_by;	 	
				$v = $_SESSION[$this->mod.'_group'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
				 
				$data['list_cat'] = json_decode($res);  
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
				
				$str_navi = ''; 
				if($row[0]->page_id > 0)
				{
					$start_loop = true;
					$this_id = $row[0]->page_id;
					while($start_loop)
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND id = ? ";	 	
						$v = $this_id;
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
						$ro = json_decode($res);  
						
						$str_navi = ' / ' . $ro[0]->title . '  ' . $str_navi;
						
						if($ro[0]->page_id == '0')
						{
							$start_loop = false;	
						}
						else
						{
							$this_id = $ro[0]->page_id;
						}
					} 	
				} 
				$data['list_str_navi'] = $str_navi;
				$_SESSION[$this->mod.'_group'] = $row[0]->cat_id;
				$_SESSION[$this->mod.'_group_page'] = $row[0]->page_id;  
			}
			 
			$model_arr = array('Portal_website_activities_cat_model','Portal_website_banner_cat_model','Portal_website_download_cat_model','Portal_website_enew_cat_model','Portal_website_faq_cat_model','Portal_website_gallery_cat_model','Portal_website_news_cat_model','Portal_website_poll_cat_model','Portal_website_question_cat_model','Portal_website_webboard_cat_model','Portal_website_vdo_cat_model');
		
			foreach($model_arr as $each_model)
			{ 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($each_model)." WHERE web_id = ? ORDER BY id ASC";		
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($each_model)),$q,$v);
				$data[$each_model] = json_decode($res); 			
			}
			  
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
		 
		   
		$d = new \stdClass();  
		 
		$d->img1 = $img1.'^'.$_POST['img1_alt'].';'.$_POST['img1_alt_en'].';'.$_POST['img1_alt_sort'];
		
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));  
		$d->page_type = $CustomHelper->input_post('page_type', TRUE); 
		 
		$d->info = htmlspecialchars_decode($CustomHelper->input_post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($CustomHelper->input_post('en_info', FALSE));
		
		$d->url = $CustomHelper->input_post('url', TRUE);
		$d->en_url = $CustomHelper->input_post('en_url', TRUE);
		$d->url_target = $CustomHelper->input_post('url_target', TRUE); 
		$d->data_id = $CustomHelper->input_post('page_type_'.$CustomHelper->input_post('page_type', TRUE), TRUE);  
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
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php
	}  
}
?>