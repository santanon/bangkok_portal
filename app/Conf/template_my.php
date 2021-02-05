<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/view?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function view()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		
		if($_SESSION['panel_style_template_id'] == 0)
		{ 
			?> 
            <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/all?m=template_list' ?>" />
            <?php
            exit;
		}
		else
		{
			$data['this_cat'] = $TextLanguage->lang('menu_sub_temp_my');
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			$data['config_mod'] = $this->mod;
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');							   
			$data['config_footer_js'] = 'mainmenuFocus(1,3,1);btn2stageFocus(0,1);';
			
		 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_template_model')." WHERE id = ? ORDER BY title ASC";	 	
			$v = $_SESSION['panel_style_template_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),$q,$v);
			$data['list_template'] = json_decode($res);  
			 
			$this->load->view('panel/' . $this->mod . '/view', $data); 	
		} 
	}
	
	public function reset_it()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		
		$d = new \stdClass(); 
		$d->template_id = '0';
		$d->template_lastupdate = date('U');  
		
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",''); 
		
		   
		$CustomHelper->add_log('Reset Template',$_SESSION['panel_username'],$_SESSION['panel_id'],'TEMPLATE_RESET');
		
		$_SESSION['panel_style_template_id'] = 0;
		$_SESSION['panel_style_template_lastupdate'] = date('U');
		   
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'&view=1' ?>" />
        <?php
        exit;
	}   
}
?>