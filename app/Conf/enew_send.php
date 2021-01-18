<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/enew_send/
LOCATION : /application/controllers/panels/enew_send.php
*/
 
class Enew_send
{  
	var $mod = 'enew_send'; 
	var $mod_model = 'Portal_website_enew_model'; 
	var $mod_title = 'Send E-Newletter'; 
	 
	var $mod_cat_mod = 'enew_cat';  
	var $mod_cat_model = 'Portal_website_enew_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('form');
	var $config_submenu_mod = array('form');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,16,1); btn2stageFocus(0,1);';
	
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	 
	public function index()
	{
		//redirect('/panels/' . $this->mod . '/form'); 
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/form' ?>" />
		<?php
		exit;	
	}
	
	public function form()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('form');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');     
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_add');							   
		$data['config_footer_js'] = 'mainmenuFocus(1,16,3); btn2stageFocus(0,1);';  
		$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title);       
		 
		if($this->mod_cat_model <> '')
		{
			$this->load->model($this->mod_model);
			$this->load->model($this->mod_cat_model);
			
			$d = new stdClass();  
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			 
			$d = new stdClass(); 
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$list = $this->{$this->mod_cat_model}->select_data($d);   
			 
			foreach ($list->result() as $row)
			{  
				$d = new stdClass();  
				$d->where = array($this->mod_cat_field => $row->id); 
				$d->count = true; 
				$data['list_cat_count'][] = $this->{$this->mod_model}->select_data($d);      
			}   
		}
		 
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}  
	
	public function send_submit()
	{ 
		$cat_id = $this->input->post('cat_id', TRUE);
		$title = htmlspecialchars($this->input->post('title', TRUE));
		//$info = $this->input->post('info', FALSE);
		$info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		 
		$this->include_header(); 
		
		$this->load->model($this->mod_model); 
		
		$this->load->library('email'); 
		$this->email->from($_SESSION['panel_profile_email'], $_SESSION['panel_profile_name'] . ' ' . $_SESSION['panel_profile_lastname']);
		
		$d = new stdClass();  
		$d->orderby = 'title ASC';
		
		if($cat_id == 'all')
		{ 
		
		}
		else
		{ 
			$d->where = array('cat_id' => $cat_id);  
		}
		
		$q = $this->{$this->mod_model}->select_data($d);  
		foreach ($q->result() as $row)
		{   
			$this->email->to($row->title);     
			echo $row->title . '<br>';
		}   	
		  
		$this->email->bcc('anurakball@gmail.com');  
		$this->email->subject($title);
		$this->email->message($info);	
		
		echo '<br><br><br>'.$info;
		exit;
		 
		//$this->email->send(); 
		//echo $this->email->print_debugger();  
	} 
}
?>