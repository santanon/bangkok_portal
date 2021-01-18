<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/contactus/
LOCATION : /application/controllers/panels/contactus.php
*/
 
class Contactus
{  
	var $mod = 'contactus'; 
	var $mod_model = 'Portal_website_contactus_model'; 
	var $mod_title = 'Contact Us'; 
	
	var $config_search_field = array('title');
	
	var $config_list_column_title = array('no.','subject','from','date');
	var $config_list_column_width = array('70','','120','100');
	var $config_list_column_name = array('id','title','contact_name','last_create');  
	
	var $config_submenu_title = array('list_message','information');
	var $config_submenu_mod = array('lists','info');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,9); btn2stageFocus(0,1);';
	
	var $config_use_edit = false;
	var $config_use_delete = true;
	var $config_use_sort = false;
	
	var $mod_cat_field = ''; 
	var $config_dropdown_cat_file = '';
	var $mod_cat_dropdown_title = ''; 
	
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc'; 
	  
	public function read($v1 = '0')
	{ 
		$this->include_header(); 
		 
		$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id' => $v1,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
			$data['read_id'] = $row[0]->id;
			$data['read_web_id'] = $row[0]->web_id;
			$data['read_title'] = $row[0]->title;
			$data['read_info'] = $row[0]->info;
			$data['read_contact_name'] = $row[0]->contact_name;
			$data['read_contact_email'] = $row[0]->contact_email;
			$data['read_contact_address'] = $row[0]->contact_address;
			$data['read_contact_tel'] = $row[0]->contact_tel;
			$data['read_last_create'] = $row[0]->last_create; 
			$data['read_ip'] = $row[0]->ip;
			
			$data['this_cat'] = $this->lang->line('contactus');
			$data['this_page'] = $this->lang->line('information');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');
			 
			$data['config_mod'] = $this->mod;       
			   
			$this->load->view('panel/contactus/read', $data); 
		} 
	}
	
	public function info()
	{ 
		$this->include_header(); 
		 
		$this->load->model('Portal_website_style_model'); 
		
		$d = new stdClass();  
		$d->where = array('id >' => 0,'web_id' => $_SESSION['panel_id']);
		$q = $this->Portal_website_style_model->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_contact_text_1'] = $row[0]->contact_text_1;
			$data['edit_contact_text_2'] = $row[0]->contact_text_2;  
			$data['edit_contact_text_3'] = $row[0]->contact_text_3;
			$data['edit_contact_text_4'] = $row[0]->contact_text_4;  
			     
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,9); btn2stageFocus(0,2);';        
			  
			$this->load->view('panel/'.$this->mod.'/edit', $data); 
		}
		else
		{
			exit;	
		}  
	}	
	
	public function info_submit()
	{ 
		$this->include_header(); 
		  
		$this->load->model('Portal_website_style_model');  
		 
		$d = new stdClass();   
		$d->contact_text_1 = htmlspecialchars_decode($this->input->post('contact_text_1', FALSE)); 
		$d->contact_text_2 = htmlspecialchars_decode($this->input->post('contact_text_2', FALSE)); 
		
		/* 
		echo $d->contact_text_1;
		echo "<br>";
		echo $d->contact_text_2;
		 */
		  
		
		$d->contact_text_3 = $this->input->post('contact_text_3', FALSE); 
		$d->contact_text_4 = $this->input->post('contact_text_4', FALSE); 
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/info');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/info' ?>" />
        <?php
        exit;	
	}  	
}
?>