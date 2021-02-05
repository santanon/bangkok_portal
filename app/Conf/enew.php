<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
class Enew
{  
	var $mod = 'enew'; 
	var $mod_model = 'Portal_website_enew_model'; 
	var $mod_title = 'E-Newsletter'; 
	
	var $mod_cat_mod = 'enew_cat'; 
	var $mod_cat_model = 'Portal_website_enew_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,16,2); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	 
	public function add()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 		 
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('add');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		$data['config_mod'] = $this->mod; 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_add');
		$data['config_footer_js'] = 'mainmenuFocus(1,16,2); btn2stageFocus(0,2);';
		$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title); 		
		
		if(@$this->mod_cat_model <> '')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			if(count($data['list_cat']) == 0)
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $TextLanguage->lang('please_create_group') ?>');
				window.history.back(); 
				</script>
				<?php
				exit;
			} 
		}  
		 
		return $data;  
	}
	
	public function add_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		   
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE);  
		  
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_group']."' ORDER BY sort DESC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		 
		$sort = '1';
		if(count($q) > 0)
		{  
			$row = $q; 
			$sort = $row[0]->sort;	 
			$sort = $sort + 1;
		} 
		 
		$d = new \stdClass(); 
		$d->web_id = $_SESSION['panel_id']; 
		$d->cat_id = $CustomHelper->input_post('cat_id', TRUE);
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE));   
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1';  
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"INSERT INTO ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr."",'');  
		 	
		$CustomHelper->add_log(''.$this->mod_title.' - Add ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_ADD');   
		 
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php  } 
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND id = ?";	 	
		$v = $v1;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res); 
		  
		if(count($q) > 0)
		{  
			$row = $q;   
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_cat_id'] = $row[0]->cat_id;
			$data['edit_title'] = $row[0]->title;  			
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');     
			$data['config_mod'] = $this->mod; 
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');							   
			$data['config_footer_js'] = 'mainmenuFocus(1,16,2); btn2stageFocus(0,1);';  
			$data['config_dropdown_title'] = $TextLanguage->lang(@$this->mod_cat_dropdown_title); 
			
			if(@$this->mod_cat_model <> '')
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by;	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
				$data['list_cat'] = json_decode($res); 
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group']; 
			}      
			  
			return $data;  
		}
		else
		{
			exit;	
		}  
	}	
	
	public function edit_submit()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		  
		$_SESSION[$this->mod.'_group'] = $CustomHelper->input_post('cat_id', TRUE); 
		 
		$d = new \stdClass();  
		$d->cat_id = $CustomHelper->input_post('cat_id', TRUE); 
		$d->title = htmlspecialchars($CustomHelper->input_post('title', TRUE)); 
		$d->last_update = date('U');   
		 
		     
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$CustomHelper->input_post('id', TRUE)."'",'');    
 	
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');   
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
        <?php  }  
}
?>