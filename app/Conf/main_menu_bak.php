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
	var $mod_model = 'Portal_website_main_menu_model'; 
	var $mod_title = 'Main Menu'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
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
		 
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		 
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_add');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,4,1); btn2stageFocus(0,2);';        
		  
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{ 
		$this->include_header(); 
		  
		$this->load->model($this->mod_model);  
		 
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
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));
		$d->have_submenu = $this->input->post('have_submenu', TRUE);   
		$d->link_type = $this->input->post('link_type', TRUE);  
		$d->url = $this->input->post('url', TRUE);  
		$d->en_url = $this->input->post('en_url', TRUE);  
		$d->url_target = $this->input->post('url_target', TRUE);  
		$d->link_page = $this->input->post('link_page', TRUE);    
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
			$data['edit_title'] = $row[0]->title;
			$data['edit_en_title'] = $row[0]->en_title;
			$data['edit_have_submenu'] = $row[0]->have_submenu;
			$data['edit_link_type'] = $row[0]->link_type;
			$data['edit_url'] = $row[0]->url;
			$data['edit_en_url'] = $row[0]->en_url; 
			$data['edit_url_target'] = $row[0]->url_target;
			$data['edit_link_page'] = $row[0]->link_page;  
			$data['edit_last_create'] = $row[0]->last_create; 
			
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
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));
		$d->have_submenu = $this->input->post('have_submenu', TRUE);   
		$d->link_type = $this->input->post('link_type', TRUE);  
		$d->url = $this->input->post('url', TRUE);  
		$d->en_url = $this->input->post('en_url', TRUE);  
		$d->url_target = $this->input->post('url_target', TRUE);  
		$d->link_page = $this->input->post('link_page', TRUE);      
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