<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/all?m='.$this->mod.'' ?>" />
        <?php
        exit;
	} 
	
	public function all()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang('menu_template');
		$data['this_page'] = $TextLanguage->lang('all');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,1);';
		
		 		
		  
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_template_model')." ORDER BY title ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),$q,$v);
		$data['list_template'] = json_decode($res);
		  
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	
	public function new_template()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang('menu_template');
		$data['this_page'] = $TextLanguage->lang('menu_sub_temp_new');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,2);';
		
		  
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_template_model')." ORDER BY id DESC";	 	
		$v = $_SESSION['panel_id'];
		$res = $list_template->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),$q,$v);
		$data['list_template'] = json_decode($res);
		
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	
	public function top()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		$data['this_cat'] = $TextLanguage->lang('menu_template');
		$data['this_page'] = $TextLanguage->lang('menu_sub_temp_top');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod;
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;  
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_all');
		$data['config_footer_js'] = 'mainmenuFocus(1,3,2);btn2stageFocus(0,3);';
		
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_template_model')." ORDER BY point DESC";	 	
		$v = $_SESSION['panel_id'];
		$res = $list_template->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),$q,$v);
		$data['list_template'] = json_decode($res);
		 
		 
		$this->load->view('panel/' . $this->mod . '/all', $data); 
	}
	 
	public function set_template($v1,$v2 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		 
		 
		$d = new \stdClass(); 
		$d->template_id = $v1;
		$d->template_lastupdate = date('U');  
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."'",''); 
		 
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_template_model')." WHERE id = ?";	 	
		$v = $v1;
		$res = $list_template->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),$q,$v);
		$last_q = json_decode($res);
		 
		$last_data = $last_q;
		$last_point = $last_data[0]->point + 1;
		$copy_img = $last_data[0]->img2;
		
		$d = new \stdClass(); 
		$d->point = $last_point;
		$d->last_update = date('U'); 
		
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_template_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_template_model')." SET ".$this_qr." WHERE id = '".$v1."'",''); 
		 
		$CustomHelper->add_log('Change Template (' . $v1 . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],'TEMPLATE_EDIT');
		
		$clear_old = false;
		if($v2 == '1')
		{
			$clear_old = true;
		}
		 
		if($clear_old)
		{ 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_bg_model')),"DELETE FROM ".$CustomHelper->model_to_table('Portal_website_bg_model')." WHERE web_id = '".$_SESSION['panel_id']."'",'');
			 
			$d = new \stdClass(); 
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
			
			
			
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_bg_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_bg_model')." SET ".$this_qr."",'');  
			
			  
		} 
		
		 
		$_SESSION['panel_style_template_id'] = $v1;
		$_SESSION['panel_style_template_lastupdate'] = date('U');
		   
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/template_my?m='.$this->mod.'' ?>" />
        <?php
        exit;
	}  
}
?>