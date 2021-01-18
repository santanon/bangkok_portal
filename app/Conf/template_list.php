<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/template_list/
LOCATION : /application/controllers/panels/template_list.php
*/
 
class Template_list
{  
	var $mod = 'template_list'; 
	var $mod_model = 'Portal_website_model'; 
	var $mod_title = 'List Template'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('id');
	
	var $config_submenu_title = array('all','menu_sub_temp_new','menu_sub_temp_top');
	var $config_submenu_mod = array('all','new_template','top');
	
	public function index()
	{ 
		//redirect('/panels/' . $this->mod . '/all'); 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/all' ?>" />
        <?php
        exit;
	} 
	
	public function all()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_template');
		$data['this_page'] = $this->lang->line('all');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,1);';
		
		$this->load->model('Portal_website_template_model');
				
		$d = new stdClass();  
		$d->orderby = 'title ASC';
		$data['list_template'] = $this->Portal_website_template_model->select_data($d);   
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	
	public function new_template()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_template');
		$data['this_page'] = $this->lang->line('menu_sub_temp_new');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,2);';
		
		$this->load->model('Portal_website_template_model');
				
		$d = new stdClass();   
		$d->orderby = 'id DESC';
		$data['list_template'] = $this->Portal_website_template_model->select_data($d);   
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	
	public function top()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('menu_template');
		$data['this_page'] = $this->lang->line('menu_sub_temp_top');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,3);';
		
		$this->load->model('Portal_website_template_model');
				
		$d = new stdClass();  
		$d->orderby = 'point DESC';
		$data['list_template'] = $this->Portal_website_template_model->select_data($d);   
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	 
	public function set_template($v1,$v2 = '0')
	{ 
		$this->include_header(); 
		
		$this->load->model('Portal_website_style_model');
		 
		$d = new stdClass(); 
		$d->template_id = $v1;
		$d->template_lastupdate = date('U');   
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id'); 
		 
		 
		$this->load->model('Portal_website_template_model');
		$d = new stdClass(); 
		$d->where = array('id'=>$v1);
		$last_q = $this->Portal_website_template_model->select_data($d);   
		$last_data = $last_q->result();
		$last_point = $last_data[0]->point + 1;
		$copy_img = $last_data[0]->img2;
		
		$d = new stdClass(); 
		$d->point = $last_point;
		$d->last_update = date('U');   
		$this->Portal_website_template_model->update_data($d,$v1,'id'); 
		
		 
		$this->load->model('Portal_website_log_model');  
		$this->Portal_website_log_model->add_log('Change Template (' . $v1 . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],'TEMPLATE_EDIT');
		
		$clear_old = false;
		if($v2 == '1')
		{
			$clear_old = true;
		}
		 
		if($clear_old)
		{
			$this->load->model('Portal_website_bg_model'); 
			$this->Portal_website_bg_model->delete_data($_SESSION['panel_id'],'web_id',0,'id >');
		  
			$d = new stdClass(); 
			$d->web_id = $_SESSION['panel_id']; 
			$d->title = 'Template';
			$d->img1 = URL_ROOT . 'upload/admin/'.$copy_img;
			$d->en_img1 = URL_ROOT . 'upload/admin/'.$copy_img;
			$d->url = '#';
			$d->en_url = '#';
			$d->url_target = '_top';
			$d->last_create = date('U');  
			$d->last_update = date('U');    
			$d->sort = 1;
			$d->status = '1';
			$d->date_start = 0;
			$d->date_end = 0;
			$d->date_set = 0;
			
			$this->Portal_website_bg_model->add_data($d);   
		} 
		
		 
		$_SESSION['panel_style_template_id'] = $v1;
		$_SESSION['panel_style_template_lastupdate'] = date('U');
		  
		//redirect('/panels/template_my');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/template_my' ?>" />
        <?php
        exit;
	}  
}
?>