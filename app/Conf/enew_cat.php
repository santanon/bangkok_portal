<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/enew_cat/
LOCATION : /application/controllers/panels/enew_cat.php
*/
 
class Enew_cat
{  
	var $mod = 'enew_cat'; 
	var $mod_model = 'Portal_website_enew_cat_model'; 
	var $mod_title = 'Group E-mail'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $mod_sub_model = 'Portal_website_enew_model'; 
	var $mod_sub_field = 'cat_id'; 
	var $mod_sub_mod = 'enew'; 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list',);
	var $config_submenu_mod = array('lists',);
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,16,1); btn2stageFocus(0,1);';
	
	var $config_use_add = false;
	var $config_use_edit = false;
	var $config_use_delete = false;
	var $config_use_sort = false;
	var $config_use_status= false;
	
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
		$data['config_footer_js'] = 'mainmenuFocus(1,16,1); btn2stageFocus(0,2);';        
		  
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
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1';
		 
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
			$data['edit_last_update'] = $row[0]->last_update; 
			 
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,16,1); btn2stageFocus(0,1);';        
			  
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
		$d->last_update = date('U'); 
		       
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>