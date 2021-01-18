<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/contentbox/
LOCATION : /application/controllers/panels/contentbox.php
*/
 
class Contentbox
{  
	var $mod = 'contentbox'; 
	var $mod_model = 'Portal_website_contentbox_model'; 
	var $mod_title = 'Content Box'; 
	
	var $mod_cat_mod = 'contentbox_cat'; 
	var $mod_cat_model = 'Portal_website_contentbox_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $mod_cat_dropdown_title = 'contentbox_cat'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	 
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
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		 
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_add');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,1,5); btn2stageFocus(0,2);';  
		$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title);
		
		if($this->mod_cat_model <> '')
		{
			$this->load->model($this->mod_cat_model);
			
			$d = new stdClass();  
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			if($data['list_cat']->num_rows == '0')
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $this->lang->line('please_create_group') ?>');
				window.location = '<?php echo base_url() . 'panels/' . $this->mod . '_cat' ?>';
				</script>
				<?php
				exit;
			}
		}  
		 
		
		$this->load->model('Portal_website_main_menu_page_model');
		$this->load->model('Portal_website_page_model');
		
		$d = new stdClass();
		$d->orderby = 'sort ASC';
		$d->where = array('web_id'=>$_SESSION['panel_id']); 
		
		$r = $this->Portal_website_main_menu_page_model->select_data($d);  
		
		$main_str = '';
		
		foreach ($r->result() as $row_cat)
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
			 
			$d = new stdClass(); 
			$d->orderby = 'sort ASC';
			$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>'0'); 
			$r_sub1 = $this->Portal_website_page_model->select_data($d); 
			 
			foreach ($r_sub1->result() as $row_cat_sub1)
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
				 
				$d = new stdClass(); 
				$d->orderby = 'sort ASC';
				$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub1->id); 
				$r_sub2 = $this->Portal_website_page_model->select_data($d); 
				
				foreach ($r_sub2->result() as $row_cat_sub2)
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
					 
					$d = new stdClass(); 
					$d->orderby = 'sort ASC';
					$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub2->id); 
					$r_sub3 = $this->Portal_website_page_model->select_data($d); 
					
					foreach ($r_sub3->result() as $row_cat_sub3)
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
						 
						$d = new stdClass(); 
						$d->orderby = 'sort ASC';
						$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub3->id); 
						$r_sub4 = $this->Portal_website_page_model->select_data($d); 
						
						foreach ($r_sub4->result() as $row_cat_sub4)
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
							 
							$d = new stdClass(); 
							$d->orderby = 'sort ASC';
							$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub4->id); 
							$r_sub5 = $this->Portal_website_page_model->select_data($d); 
							
							foreach ($r_sub5->result() as $row_cat_sub5)
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
								
								$d = new stdClass(); 
								$d->orderby = 'sort ASC';
								$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub5->id); 
								$r_sub6 = $this->Portal_website_page_model->select_data($d); 
								
								foreach ($r_sub6->result() as $row_cat_sub6)
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
		
		   
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{ 
		$this->include_header();  
		$this->load->model($this->mod_model); 
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE); 
		  
		$d = new stdClass();  
		$d->where = array('web_id' => $_SESSION['panel_id'],'cat_id' => $_SESSION[$this->mod.'_group']); 
		$d->orderby = 'sort DESC';
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		$sort = '1';
		if($q->num_rows > 0)
		{  
			$row = $q->result(); 
			$sort = $row[0]->sort;	 
			$sort = $sort + 1;
		} 
		 
		$d = new stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->cat_id = $this->input->post('cat_id', TRUE);   
		$d->title = htmlspecialchars($this->input->post('title', TRUE));   
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));   
		$d->box_number = $this->input->post('box_number', TRUE);   
		$d->box1 = $this->input->post('box1', TRUE);   
		$d->box2 = $this->input->post('box2', TRUE);   
		$d->box3 = $this->input->post('box3', TRUE);   
		$d->box4 = $this->input->post('box4', TRUE);      
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1';
		
		$date_1 = 0;
		
		if(strlen($this->input->post('date_start', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_start', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$date_2 = 0;
		
		if(strlen($this->input->post('date_end', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_end', TRUE));
			$end_d = $arr[0];
			$end_m = $arr[1];
			$end_y = $arr[2];
			
			$date_2 = mktime(23,59,59,$end_m,$end_d,$end_y);
		} 
		
		$d->date_start = $date_1;
		$d->date_end = $date_2;
		$d->date_set = $this->input->post('date_set', TRUE);
		
		$this->{$this->mod_model}->add_data($d);    
			
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Add (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
	
	public function edit($v1 = '0')
	{ 
		$this->include_header(); 
		 
		$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id' => $v1,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
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
			    
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,5); btn2stageFocus(0,1);';   
			$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title);
			
			if($this->mod_cat_model <> '')
			{
				$this->load->model($this->mod_cat_model);
				
				$d = new stdClass();  
				$d->orderby = $this->mod_cat_order_by;
				$d->where = array('web_id'=>$_SESSION['panel_id']);
				$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			}     
			
			$this->load->model('Portal_website_main_menu_page_model');
			$this->load->model('Portal_website_page_model');
			
			$d = new stdClass(); 
			$d->orderby = 'sort ASC';
			$d->where = array('web_id'=>$_SESSION['panel_id']); 
			
			$r = $this->Portal_website_main_menu_page_model->select_data($d);  
			
			$main_str = '';
			
			foreach ($r->result() as $row_cat)
			{      
				if($row_cat->page_type <> 'group')
				{
					$main_str = $main_str . '<option value="m' . $row_cat->id . '">- ' . $row_cat->title . '</option>';
				}
				 
				$d = new stdClass(); 
				$d->orderby = 'sort ASC';
				$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>'0'); 
				$r_sub1 = $this->Portal_website_page_model->select_data($d); 
				 
				foreach ($r_sub1->result() as $row_cat_sub1)
				{ 
					if($row_cat_sub1->page_type <> 'group')
					{
						$main_str = $main_str . '<option value="' . $row_cat_sub1->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . '</option>';	
					}				
					 
					$d = new stdClass(); 
					$d->orderby = 'sort ASC';
					$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub1->id); 
					$r_sub2 = $this->Portal_website_page_model->select_data($d); 
					
					foreach ($r_sub2->result() as $row_cat_sub2)
					{	  
						if($row_cat_sub2->page_type <> 'group')
						{
							$main_str = $main_str . '<option value="' . $row_cat_sub2->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . '</option>';
						}	
						 
						$d = new stdClass(); 
						$d->orderby = 'sort ASC';
						$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub2->id); 
						$r_sub3 = $this->Portal_website_page_model->select_data($d); 
						
						foreach ($r_sub3->result() as $row_cat_sub3)
						{	
							if($row_cat_sub3->page_type <> 'group')
							{
								$main_str = $main_str . '<option value="' . $row_cat_sub3->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . '</option>';
							}
							 
							$d = new stdClass(); 
							$d->orderby = 'sort ASC';
							$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub3->id); 
							$r_sub4 = $this->Portal_website_page_model->select_data($d); 
							
							foreach ($r_sub4->result() as $row_cat_sub4)
							{
								if($row_cat_sub4->page_type <> 'group')
								{
									$main_str = $main_str . '<option value="' . $row_cat_sub4->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . '</option>';
								}
								 
								$d = new stdClass(); 
								$d->orderby = 'sort ASC';
								$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub4->id); 
								$r_sub5 = $this->Portal_website_page_model->select_data($d); 
								
								foreach ($r_sub5->result() as $row_cat_sub5)
								{
									if($row_cat_sub5->page_type <> 'group')
									{
										$main_str = $main_str . '<option value="' . $row_cat_sub5->id . '">- ' . $row_cat->title . ' / ' . $row_cat_sub1->title . ' / ' . $row_cat_sub2->title . ' / ' . $row_cat_sub3->title . ' / ' . $row_cat_sub4->title . ' /  ' . $row_cat_sub5->title . '</option>';
									} 
									
									$d = new stdClass(); 
									$d->orderby = 'sort ASC';
									$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub5->id); 
									$r_sub6 = $this->Portal_website_page_model->select_data($d); 
									
									foreach ($r_sub6->result() as $row_cat_sub6)
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
		  
			$this->load->view('panel/'.$this->mod.'/edit', $data); 
		}
		else
		{
			exit;	
		}  
	}	
	
	public function edit_submit()
	{ 
		$this->include_header();  
		$this->load->model($this->mod_model); 
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE);  
		 
		$d = new stdClass();  
		$d->cat_id = $this->input->post('cat_id', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));
		$d->box_number = $this->input->post('box_number', TRUE);  
		$d->box1 = $this->input->post('box1', TRUE);  
		$d->box2 = $this->input->post('box2', TRUE);  
		$d->box3 = $this->input->post('box3', TRUE);  
		$d->box4 = $this->input->post('box4', TRUE);       
		$d->last_update = date('U');    
		
		$date_1 = 0;
		
		if(strlen($this->input->post('date_start', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_start', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$date_2 = 0;
		
		if(strlen($this->input->post('date_end', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_end', TRUE));
			$end_d = $arr[0];
			$end_m = $arr[1];
			$end_y = $arr[2];
			
			$date_2 = mktime(23,59,59,$end_m,$end_d,$end_y);
		} 
		
		$d->date_start = $date_1;
		$d->date_end = $date_2;
		$d->date_set = $this->input->post('date_set', TRUE);
		    
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>