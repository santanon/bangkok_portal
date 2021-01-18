<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/main_menu/
LOCATION : /application/controllers/panels/main_menu.php
*/
 
class Main_menu
{  
	var $mod = 'main_menu'; 
	var $mod_model = 'Portal_website_main_menu_page_model'; 
	var $mod_title = 'Main Menu'; 
	
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
									   
	var $config_list_footer_js = 'mainmenuFocus(1,4,1); btn2stageFocus(0,1);';
	
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
		
		if(empty($_SESSION[$this->mod.'_group_page']))
		{
			$_SESSION[$this->mod.'_group_page'] = '0';
		}
		 
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		  
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_add');
									     
		$data['config_footer_js'] = 'mainmenuFocus(1,4,1); btn2stageFocus(0,2);';        
		$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title); 
		
		if($this->mod_cat_model <> '')
		{
			$this->load->model($this->mod_cat_model);
			
			if(empty($_SESSION[$this->mod.'_group']))
			{
				$d = new stdClass();  
				$d->orderby = $this->mod_cat_order_by;
				$d->where = array('web_id'=>$_SESSION['panel_id'],'have_submenu'=>'2');		
				$data['check_cat'] = $this->{$this->mod_cat_model}->select_data($d); 
				if($data['check_cat']->num_rows == '0')
				{
					?><meta charset="utf-8" />
					<script>
                    alert('<?php echo $this->lang->line('please_create_group') ?>');
                    window.location = '<?php echo base_url() . 'panels/main_menu' ?>';
                    </script>
                    <?php
                    exit;
				}
				else
				{
					$q = $data['check_cat']->result();
					$_SESSION[$this->mod.'_group'] = $q[0]->id;	
				} 
			}
			 
			$d = new stdClass();  
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id'],'id'=>$_SESSION[$this->mod.'_group']);
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			
			$this->load->model($this->mod_model);
			$str_navi = '';
			if($_SESSION[$this->mod.'_group_page'] > 0)
			{ 
				$start_loop = true;
				$this_id = $_SESSION[$this->mod.'_group_page'];
				while($start_loop)
				{
					$d = new stdClass();  
					$d->where = array('web_id'=>$_SESSION['panel_id'],'id'=>$this_id); 
					$q = $this->{$this->mod_model}->select_data($d);      
					$ro = $q->result();	
					
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
		  
		$model_arr = array('Portal_website_activities_cat_model','Portal_website_banner_cat_model','Portal_website_download_cat_model','Portal_website_enew_cat_model','Portal_website_faq_cat_model','Portal_website_gallery_cat_model','Portal_website_news_cat_model','Portal_website_poll_cat_model','Portal_website_question_cat_model','Portal_website_webboard_cat_model');
		
		while($each_model = each($model_arr))
		{
			$this->load->model($each_model[1]);	
			
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']);   
			$d->orderby = 'id ASC';
			$data[$each_model[1]] = $this->{$each_model[1]}->select_data($d);  
		}      
			 
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{ 
		$this->include_header();  
		$this->load->model($this->mod_model);  
		  
		$str_model = '';
		$str_path = '';
		$redirect_new = false; 
		$sub_new_id = '';
		  
		if($this->input->post('page_type_'.$this->input->post('page_type', TRUE), TRUE) == 'new')
		{  
			if($this->input->post('page_type', TRUE) == 'news')
			{
				$str_model = 'Portal_website_news_cat_model';
				$str_path = 'news';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'calendar')
			{
				$str_model = 'Portal_website_activities_cat_model';
				$str_path = 'activities';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'faq')
			{
				$str_model = 'Portal_website_faq_cat_model';
				$str_path = 'faq';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'gallery')
			{
				$str_model = 'Portal_website_gallery_cat_model';
				$str_path = 'gallery';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'banner')
			{
				$str_model = 'Portal_website_banner_cat_model';
				$str_path = 'banner';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'download')
			{
				$str_model = 'Portal_website_download_cat_model';
				$str_path = 'download';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'question')
			{
				$str_model = 'Portal_website_question_cat_model';
				$str_path = 'question';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'poll')
			{
				$str_model = 'Portal_website_poll_cat_model';
				$str_path = 'poll';
				$redirect_new = true; 
			}
			if($this->input->post('page_type', TRUE) == 'webboard')
			{
				$str_model = 'Portal_website_webboard_cat_model';
				$str_path = 'webboard';
				$redirect_new = true; 
			}
			
			$this->load->model($str_model);   
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']); 
			$d->orderby = 'sort DESC';
			$q = $this->{$str_model}->select_data($d);  
			 
			$sort = '1';
			if($q->num_rows > 0)
			{  
				$row = $q->result(); 
				$sort = $row[0]->sort;	 
				$sort = $sort + 1;
			} 
			 
			$d = new stdClass(); 
			$d->web_id = $_SESSION['panel_id']; 
			$d->title = htmlspecialchars($this->input->post('title', TRUE));
			$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));   
			$d->last_create = date('U');  
			$d->last_update = date('U');    
			$d->sort = $sort;
			$d->status = '1';
			$this->{$str_model}->add_data($d); 
			
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']); 
			$d->orderby = 'id DESC';
			$q = $this->{$str_model}->select_data($d);  
			$row = $q->result(); 
			
			$sub_new_id = $row[0]->id; 
		} 
		  
		$d = new stdClass();  
		$d->where = array('web_id' => $_SESSION['panel_id']); 
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
		$d->img1 = $this->input->post('img1', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));  
		$d->page_type = $this->input->post('page_type', TRUE);
		
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($this->input->post('en_info', FALSE));  
		/*
		$d->info = $this->input->post('info', FALSE);
		$d->en_info = $this->input->post('en_info', FALSE);
		*/
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($this->input->post('en_info', FALSE));
		
		
		$d->url = $this->input->post('url', TRUE);
		$d->en_url = $this->input->post('en_url', TRUE);
		$d->url_target = $this->input->post('url_target', TRUE);
		 
		if($this->input->post('page_type_'.$this->input->post('page_type', TRUE), TRUE) == 'new')
		{
			$d->data_id = $sub_new_id;
		}
		else
		{
			$d->data_id = $this->input->post('page_type_'.$this->input->post('page_type', TRUE), TRUE); 	
		}
		 
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
		
		
		
		
		$d->can_review = $this->input->post('can_review', TRUE);
		$this->{$this->mod_model}->add_data($d);    
		
		 
			
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Add (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');  
		 
		
		if($redirect_new)
		{
			//redirect('/panels/' . $str_path . '/set_cat/' . $sub_new_id);   
			?>
			<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $str_path . '/set_cat/' . $sub_new_id ?>" />
			<?php
			exit;
		}
		else
		{
			//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
	} 
	
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
			    
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,4,1); btn2stageFocus(0,1);';   
			$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title); 
			
			if($this->mod_cat_model <> '')
			{
				$this->load->model($this->mod_cat_model);
				
				if(empty($_SESSION[$this->mod.'_group']))
				{
					$d = new stdClass();  
					$d->orderby = $this->mod_cat_order_by;
					$d->where = array('web_id'=>$_SESSION['panel_id']);		
					$data['check_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
					$q = $data['check_cat']->result();
					$_SESSION[$this->mod.'_group'] = $q[0]->id;
				}
				 
				$d = new stdClass();  
				$d->orderby = $this->mod_cat_order_by;
				$d->where = array('web_id'=>$_SESSION['panel_id'],'id'=>$_SESSION[$this->mod.'_group']);
				$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
				
				
				 
				$str_navi = ''; 
				if($row[0]->page_id > 0)
				{
					$start_loop = true;
					$this_id = $row[0]->page_id;
					while($start_loop)
					{
						$d = new stdClass();  
						$d->where = array('web_id'=>$_SESSION['panel_id'],'id'=>$this_id); 
						$q = $this->{$this->mod_model}->select_data($d);      
						$ro = $q->result();	
						
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
			
			$model_arr = array('Portal_website_activities_cat_model','Portal_website_banner_cat_model','Portal_website_download_cat_model','Portal_website_enew_cat_model','Portal_website_faq_cat_model','Portal_website_gallery_cat_model','Portal_website_news_cat_model','Portal_website_poll_cat_model','Portal_website_question_cat_model','Portal_website_webboard_cat_model');
		
			while($each_model = each($model_arr))
			{
				$this->load->model($each_model[1]);	
				
				$d = new stdClass();  
				$d->where = array('web_id' => $_SESSION['panel_id']);   
				$d->orderby = 'id ASC';
				$data[$each_model[1]] = $this->{$each_model[1]}->select_data($d);  
			}      
			  
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
		   
		$d = new stdClass();  
		$d->img1 = $this->input->post('img1', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));  
		$d->page_type = $this->input->post('page_type', TRUE); 
		/*
		$d->info = $this->input->post('info', FALSE);
		$d->en_info = $this->input->post('en_info', FALSE);
		*/
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($this->input->post('en_info', FALSE));
		
		$d->url = $this->input->post('url', TRUE);
		$d->en_url = $this->input->post('en_url', TRUE);
		$d->url_target = $this->input->post('url_target', TRUE); 
		$d->data_id = $this->input->post('page_type_'.$this->input->post('page_type', TRUE), TRUE);  
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
		
		$d->can_review = $this->input->post('can_review', TRUE);
		     
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>