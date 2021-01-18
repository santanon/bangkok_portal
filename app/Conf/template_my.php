<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/template_my/
LOCATION : /application/controllers/panels/template_my.php
*/
 
class Template_my
{  
	var $mod = 'template_my'; 
	var $mod_model = 'Portal_website_model'; 
	var $mod_title = 'My Template'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('id');
	
	var $config_submenu_title = array('view');
	var $config_submenu_mod = array('view');
	
	public function index()
	{ 
		//redirect('/panels/' . $this->mod . '/view');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/view' ?>" />
        <?php
        exit;
	} 
	
	public function view()
	{ 
		$this->include_header(); 
		
		if($_SESSION['panel_style_template_id'] == 0)
		{
			//redirect('/panels/template_list/all');
			?>
            <meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/template_list/all' ?>" />
            <?php
            exit;
		}
		else
		{
			$data['this_cat'] = $this->lang->line('menu_sub_temp_my');
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			$data['config_mod'] = $this->mod;
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');							   
			$data['config_footer_js'] = 'mainmenuFocus(1,3,1);btn2stageFocus(0,1);';
			
			$this->load->model('Portal_website_template_model');
			$d = new stdClass();  
			$d->where = array('id'=>$_SESSION['panel_style_template_id']);
			$d->orderby = 'title ASC';
			$data['list_template'] = $this->Portal_website_template_model->select_data($d);   
			 
			$this->load->view('panel/' . $this->mod . '/view', $data); 	
		} 
	}
	
	public function reset_it()
	{  
		$this->include_header(); 
		
		$this->load->model('Portal_website_style_model');
		
		$d = new stdClass(); 
		$d->template_id = '0';
		$d->template_lastupdate = date('U');   
		
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id'); 
		
		$this->load->model('Portal_website_log_model');  
		$this->Portal_website_log_model->add_log('Reset Template',$_SESSION['panel_username'],$_SESSION['panel_id'],'TEMPLATE_RESET');
		
		$_SESSION['panel_style_template_id'] = 0;
		$_SESSION['panel_style_template_lastupdate'] = date('U');
		  
		//redirect('panels/' . $this->mod . '/view'); 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'panels/' . $this->mod . '/view' ?>" />
        <?php
        exit;
	}   
}
?>