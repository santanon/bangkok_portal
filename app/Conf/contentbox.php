<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Contentbox
{  
	var $mod = 'contentbox'; 
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
		 
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
		$r = json_decode($res); 
		
		$main_str = '';
		
		foreach ($r as $row_cat)
		{    
			$check_insert = true; 
			if($row_cat->page_type == 'group' || $row_cat->page_type == 'texteditor' || $row_cat->page_type == 'url' || $row_cat->page_type == 'question')
			{
				$check_insert = false;
			} 
			if($check_insert)
			{
				$main_str = $main_str . '<option value="m' . $row_cat->id . '">- ' . $row_cat->title . '(' . $row_cat->page_type . ')</option>';	
			}
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '0' ORDER BY sort ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
			$r_sub1 = json_decode($res); 
			 
			foreach ($r_sub1 as $row_cat_sub1)
			{ 
				$check_insert = true; 
				if($row_cat_sub1->page_type == 'group' || $row_cat_sub1->page_type == 'texteditor' || $row_cat_sub1->page_type == 'url' || $row_cat_sub1->page_type == 'question')
				{
					$check_insert = false;
				} 
				if($check_insert) 
				{
					$main_str = $main_str . '<option value="' . $row_cat_sub1->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . '</option>';	
				}				
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub1->id."' ORDER BY sort ASC";	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
				$r_sub2 = json_decode($res); 
				 
				foreach ($r_sub2 as $row_cat_sub2)
				{	  
					$check_insert = true; 
					if($row_cat_sub2->page_type == 'group' || $row_cat_sub2->page_type == 'texteditor' || $row_cat_sub2->page_type == 'url' || $row_cat_sub2->page_type == 'question')
					{
						$check_insert = false;
					} 
					if($check_insert)  
					{
						$main_str = $main_str . '<option value="' . $row_cat_sub2->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . '</option>';
					}	
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub2->id."' ORDER BY sort ASC";	 	
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
					$r_sub3 = json_decode($res); 
					  
					foreach ($r_sub3 as $row_cat_sub3)
					{	
						$check_insert = true; 
						if($row_cat_sub3->page_type == 'group' || $row_cat_sub3->page_type == 'texteditor' || $row_cat_sub3->page_type == 'url' || $row_cat_sub3->page_type == 'question')
						{
							$check_insert = false;
						} 
						if($check_insert)   
						{
							$main_str = $main_str . '<option value="' . $row_cat_sub3->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . '</option>';
						}
						
						$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub3->id."' ORDER BY sort ASC";	 	
						$v = $_SESSION['panel_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
						$r_sub4 = json_decode($res); 
						 
						foreach ($r_sub4 as $row_cat_sub4)
						{
							$check_insert = true; 
							if($row_cat_sub4->page_type == 'group' || $row_cat_sub4->page_type == 'texteditor' || $row_cat_sub4->page_type == 'url' || $row_cat_sub4->page_type == 'question')
							{
								$check_insert = false;
							} 
							if($check_insert)    
							{
								$main_str = $main_str . '<option value="' . $row_cat_sub4->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . '</option>';
							}
							
							$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub4->id."' ORDER BY sort ASC";	 	
							$v = $_SESSION['panel_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
							$r_sub5 = json_decode($res); 
							  
							foreach ($r_sub5 as $row_cat_sub5)
							{
								$check_insert = true; 
								if($row_cat_sub5->page_type == 'group' || $row_cat_sub5->page_type == 'texteditor' || $row_cat_sub5->page_type == 'url' || $row_cat_sub5->page_type == 'question')
								{
									$check_insert = false;
								} 
								if($check_insert)     
								{
									$main_str = $main_str . '<option value="' . $row_cat_sub5->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . ' /  ' . $row_cat_sub5->title . '</option>';
								} 
								
								$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub5->id."' ORDER BY sort ASC";	 	
								$v = $_SESSION['panel_id'];
								$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
								$r_sub6 = json_decode($res); 
								 
								foreach ($r_sub6 as $row_cat_sub6)
								{
									$check_insert = true; 
									if($row_cat_sub6->page_type == 'group' || $row_cat_sub6->page_type == 'texteditor' || $row_cat_sub6->page_type == 'url' || $row_cat_sub6->page_type == 'question')
									{
										$check_insert = false;
									} 
									if($check_insert)      
									{
										$main_str = $main_str . '<option value="' . $row_cat_sub6->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . ' /  ' . $row_cat_sub5->title . ' /  ' . $row_cat_sub6->title . '</option>';
									}	
								}
							}
						}
					}
				}
			}  
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
		   
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE); 
		
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE id > 0 AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_group']."'";	 	
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
		$d->box_number = $CustomHelper->input_post('box_number', TRUE);   
		$d->box1 = $CustomHelper->input_post('box1', TRUE);   
		$d->box2 = $CustomHelper->input_post('box2', TRUE);   
		$d->box3 = $CustomHelper->input_post('box3', TRUE);   
		$d->box4 = $CustomHelper->input_post('box4', TRUE);      
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
			
			if(@$this->mod_cat_model <> '')
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
				$data['list_cat'] = json_decode($res); 
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group']; 
			}    
			  
			
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
			$r = json_decode($res);   
			  
			$main_str = ''; 
			foreach ($r as $row_cat)
			{      
				if($row_cat->page_type <> 'group')
				{
					$main_str = $main_str . '<option value="m' . $row_cat->id . '">- ' . $row_cat->title . '</option>';
				}
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '0' ORDER BY sort ASC";	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
				$r_sub1 = json_decode($res); 
				 
				foreach ($r_sub1 as $row_cat_sub1)
				{ 
					if($row_cat_sub1->page_type <> 'group')
					{
						$main_str = $main_str . '<option value="' . $row_cat_sub1->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . '</option>';	
					}		
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub1->id."' ORDER BY sort ASC";	 	
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
					$r_sub2 = json_decode($res); 		
					  
					foreach ($r_sub2 as $row_cat_sub2)
					{	  
						if($row_cat_sub2->page_type <> 'group')
						{
							$main_str = $main_str . '<option value="' . $row_cat_sub2->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . '</option>';
						}	
						
						$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub2->id."' ORDER BY sort ASC";	 	
						$v = $_SESSION['panel_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
						$r_sub3 = json_decode($res);
						 
						foreach ($r_sub3 as $row_cat_sub3)
						{	
							if($row_cat_sub3->page_type <> 'group')
							{
								$main_str = $main_str . '<option value="' . $row_cat_sub3->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . '</option>';
							}
							
							$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub3->id."' ORDER BY sort ASC";	 	
							$v = $_SESSION['panel_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
							$r_sub4 = json_decode($res);
							 
							foreach ($r_sub4 as $row_cat_sub4)
							{
								if($row_cat_sub4->page_type <> 'group')
								{
									$main_str = $main_str . '<option value="' . $row_cat_sub4->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . '</option>';
								}
								
								$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub4->id."' ORDER BY sort ASC";	 	
								$v = $_SESSION['panel_id'];
								$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
								$r_sub5 = json_decode($res);
								  
								foreach ($r_sub5 as $row_cat_sub5)
								{
									if($row_cat_sub5->page_type <> 'group')
									{
										$main_str = $main_str . '<option value="' . $row_cat_sub5->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . ' /  ' . $row_cat_sub5->title . '</option>';
									} 
									
									$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub5->id."' ORDER BY sort ASC";	 	
									$v = $_SESSION['panel_id'];
									$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
									$r_sub6 = json_decode($res);
									 
									foreach ($r_sub6 as $row_cat_sub6)
									{
										if($row_cat_sub6->page_type <> 'group')
										{
											$main_str = $main_str . '<option value="' . $row_cat_sub6->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . ' /  ' . $row_cat_sub5->title . ' /  ' . $row_cat_sub6->title . '</option>';
										}	
									}
								}
							}
						}
					}
				}  
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
		$d->cat_id = $CustomHelper->input_post('cat_id', TRUE);
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));
		$d->en_title = htmlspecialchars($CustomHelper->input_post('en_title', TRUE));
		$d->box_number = $CustomHelper->input_post('box_number', TRUE);  
		$d->box1 = $CustomHelper->input_post('box1', TRUE);  
		$d->box2 = $CustomHelper->input_post('box2', TRUE);  
		$d->box3 = $CustomHelper->input_post('box3', TRUE);  
		$d->box4 = $CustomHelper->input_post('box4', TRUE);       
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