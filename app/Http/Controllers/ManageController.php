<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
 
class ManageController extends Controller
{  
    var $mod = ''; 
	var $mod_model = ''; 
	var $mod_title = ''; 
	var $mod_cat_mod = ''; 
	var $mod_cat_model = ''; 
	var $mod_cat_field = ''; 
	var $mod_cat_order_by = ''; 
	var $mod_cat_dropdown_title = 'group'; 
	var $config_search_field = array(''); 
	var $mod_sub_model = ''; 
	var $mod_sub_field = ''; 
	var $mod_sub_mod = '';  
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc';  
	var $config_list_column_title = array('');
	var $config_list_column_width = array('');
	var $config_list_column_name = array('');  
	var $config_size_w = 0;
	var $config_size_h = 0; 
	var $config_submenu_title = array('');
	var $config_submenu_mod = array(''); 
	var $config_list_header_info = '';
	var $config_list_footer_js = ''; 
	var $config_use_add = false;
	var $config_use_edit = false;
	var $config_use_delete = false;
	var $config_use_sort = false;
	var $config_use_status = false; 
	var $config_dropdown_cat_file = ''; 
	var $config_connect_page = false;
    
    public function action()
    {        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		
		return view('manage.action');
    } 
    public function add()
    {        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		 
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$data = $m->add();
		  
        return view('manage.'.$_GET['m'].'.add',$data);
    } 
	public function add_submit()
    {     
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();   
		$m->add_submit();
    } 
    public function comment($v1 = '0')
	{
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
         
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		 
		if(count($q) > 0)
		{  
			$row = $q;  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_cat_id'] = $row[0]->cat_id; 
			
			$data['edit_click_view'] = $row[0]->click_view; 
			$data['edit_vote_good'] = $row[0]->vote_good; 
			$data['edit_vote_bad'] = $row[0]->vote_bad;  
			$data['edit_can_review'] = $row[0]->can_review;  
			
			$data['edit_date_start'] = $row[0]->date_start; 
			$data['edit_date_end'] = $row[0]->date_end; 
			$data['edit_date_set'] = $row[0]->date_set; 
			 
			$data['this_cat'] = $TextLanguage->lang($this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			 
			
			$comment_model = 'portal_website_'.$this->mod.'_comment_model'; 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE web_id = ? AND cat_id = '".$row[0]->id."' ORDER BY id ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
			$data['list_comment'] = json_decode($res);
		 
			  
			$this->load->view('panel/comment', $data); 
		}
		else
		{
			exit;	
        }   
    }
    public function comment_text($v1 = '0',$v2 = '')
	{
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		 
		if(count($q) > 0)
		{  
			$row = $q;  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id; 
			
			$data['edit_click_view'] = $row[0]->click_view; 
			$data['edit_vote_good'] = $row[0]->vote_good; 
			$data['edit_vote_bad'] = $row[0]->vote_bad;  
			$data['edit_can_review'] = $row[0]->can_review;  
			
			$data['edit_date_start'] = $row[0]->date_start; 
			$data['edit_date_end'] = $row[0]->date_end; 
			$data['edit_date_set'] = $row[0]->date_set; 
			 
			$data['this_cat'] = $TextLanguage->lang($this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			 
			$comment_model = 'Portal_website_main_comment_model';
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE web_id = ? AND this_id = '".$v1."' AND main_type = '".$v2."' ORDER BY id ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
			$data['list_comment'] = json_decode($res);
			  
			$this->load->view('panel/comment', $data); 
		}
		else
		{
			exit;	
		} 
    }
    public function comment_delete($v1 = '0',$v2 = '0',$v3 = '')
	{
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('portal_website_main_comment_model')),"DELETE FROM ".$CustomHelper->model_to_table('portal_website_main_comment_model')." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$v1."'",'');
    }    
    public function delete($id = '0')
	{ 
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
        
         
         
		
		if($this->mod == 'page')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND page_id = '".$id."'";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
			$q = json_decode($res);
			 
			if($q > 0)
			{
				?>
                <meta charset="utf-8" />
                <script type="text/javascript">
				alert('<?php echo $TextLanguage->lang('can_not_delete') ?>');
				window.history.back();
				</script>
                <?php
				exit;
			}
		}
		  
		if($this->mod == 'inbox')
		{  
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$id."'";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
			$q = json_decode($res);   
			$t = $q; 	
			
			@unlink('./upload/inbox/'.$t[0]->file1);
		}
		
		if(strlen($this->mod_sub_model) > 3)
		{   
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_sub_model)." WHERE web_id = ? AND ".$this->mod_sub_field." = '".$id."'";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_sub_model)),$q,$v);
			$q = json_decode($res); 
			
			
			if($q > 0)
			{ 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_sub_model)),"DELETE FROM ".$CustomHelper->model_to_table($this->mod_sub_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND ".$this->mod_sub_field." = '".$id."'",''); 
			}
		}
		 
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$id."' ORDER BY id DESC LIMIT 0,1";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res); 
		  
		$t = $q;
		$this_title = $t[0]->title; 

		$arr_list_img_field = array('img1','en_img1','file1','en_file1');


		foreach($arr_list_img_field as $v)
		{
			if(isset($t[0]->{$v}) && $t[0]->{$v} != '')
			{
				$this_f = $t[0]->{$v}; 
				if(strpos($this_f,'|') > -1)
				{
					$each_v = explode('|',$this_f);
					foreach($each_v as $item_v) 
					{
						if(trim($item_v) != '')
						{
							@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($item_v));
						}
					}
				}
				else
				{
					@unlink($_SERVER['DOCUMENT_ROOT'].'/user_files/'.$_SESSION['panel_id'].'/'.basename($this_f));
				}
			}
		}
		
		 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"DELETE FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$id."'",''); 
		 
		
		$CustomHelper->add_log($this->mod_title . ' - Delete (' . $this_title . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_DELETE'); 	
		
		?> <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" /><?php
		exit;	
	} 
    public function edit()
    {        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		 
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$data = $m->edit($_GET['id']);
		  
        return view('manage.'.$_GET['m'].'.edit',$data); 
    } 
	public function edit_submit()
    {        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		 
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$m->edit_submit();
    } 	 
    public function edit_logo()
    {      
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		$this->include_check_login();  

		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$data = $m->index();
		  
        return view('manage.'.$_GET['m'].'.index',$data);  
    }  
	public function edit_website()
    {      
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		$this->include_check_login();  

		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$data = $m->edit();
 
        return view('manage.'.$_GET['m'].'.edit',$data);  
    } 
    public function include_check_login()
	{ 
		if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == 1)
		{ 

		} 
		else
		{
            session_destroy();
            ?><script>window.top.location = '/panel-admin/login';</script><?php
			 exit;
		}
		 
		if(empty($_GET['m']))
		{
			exit;
		}
		
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c(); 
		 
		$this->mod 						= @$m->mod; 
		$this->mod_model 				= @$m->mod_model;
		$this->mod_title 				= @$m->mod_title;
		$this->mod_cat_mod 				= @$m->mod_cat_mod;
		$this->mod_cat_model			= @$m->mod_cat_model;
		$this->mod_cat_field  			= @$m->mod_cat_field;
		$this->mod_cat_order_by 		= @$m->mod_cat_order_by;
		$this->mod_sub_model 			= @$m->mod_sub_model;
		$this->mod_sub_field 			= @$m->mod_sub_field;
		$this->mod_sub_mod 				= @$m->mod_sub_mod;
		$this->config_dropdown_cat_file = @$m->config_dropdown_cat_file;
		$this->config_search_field 		= @$m->config_search_field;
		$this->config_list_column_title = @$m->config_list_column_title;
		$this->config_list_column_width = @$m->config_list_column_width;
		$this->config_list_column_name 	= @$m->config_list_column_name;
		$this->config_submenu_title 	= @$m->config_submenu_title;
		$this->config_submenu_mod 		= @$m->config_submenu_mod;
		$this->config_list_header_info 	= @$m->config_list_header_info; 						   
		$this->config_list_footer_js 	= @$m->config_list_footer_js; 
		$this->config_use_add 			= @$m->config_use_add;
		$this->config_use_edit 			= @$m->config_use_edit;
		$this->config_use_delete 		= @$m->config_use_delete;
		$this->config_use_sort 			= @$m->config_use_sort;
		$this->config_use_status		= @$m->config_use_status; 
		$this->config_sort1 			= @$m->config_sort1;
		$this->config_sort2 			= @$m->config_sort2; 
		$this->config_connect_page 		= @$m->config_connect_page; 
	}
    public function lang($v)
	{
		return $v;	
	}
	public function list()
    {        
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();   
		
		$q_mod_cat_order_by = '';
		if($this->mod_cat_order_by <> '')
		{
			$q_mod_cat_order_by = ' ORDER BY '.$this->mod_cat_order_by;
		}
		
        if(empty($_SESSION[$this->mod.'_max_rows']))
		{
			$_SESSION[$this->mod.'_max_rows'] = 10;
		}
		if(empty($_SESSION[$this->mod.'_page_num']))
		{
			$_SESSION[$this->mod.'_page_num'] = 0;
		} 
		if(empty($_SESSION[$this->mod.'_sort_1']))
		{
			$_SESSION[$this->mod.'_sort_1'] = $this->config_sort1;
		}
		if($this->mod == "gallery")
		{
			$_SESSION[$this->mod.'_sort_1'] = 'id';
		}
		if(empty($_SESSION[$this->mod.'_sort_2']))
		{
			$_SESSION[$this->mod.'_sort_2'] = $this->config_sort2;
		}
		if($this->mod == "gallery")
		{
			$_SESSION[$this->mod.'_sort_2'] = 'DESC';
		}
		if(empty($_SESSION[$this->mod.'_search']))
		{
			$_SESSION[$this->mod.'_search'] = '';
		}
		if(empty($_SESSION[$this->mod.'_group']))
		{
			$_SESSION[$this->mod.'_group'] = '0';
		} 
		if(empty($_SESSION[$this->mod.'_group_page']))
		{
			$_SESSION[$this->mod.'_group_page'] = '0';
		}
		 
		$start_rows = $_SESSION[$this->mod.'_page_num'] * $_SESSION[$this->mod.'_max_rows'];
		 
		$qr_d = ''; 
		if($this->mod == 'page')
		{
			$qr_d = " AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."' AND web_id = ? AND page_id = '".$_SESSION[$this->mod.'_group_page']."' "; 
		}
		else
		{
			if($_SESSION[$this->mod.'_group'] <> '0')
			{
				$qr_d = " AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."' AND web_id = ?"; 
			}
			else
			{ 
				if($this->mod_cat_field <> '')
				{
					$qr_d = " AND ".$this->mod_cat_field." = '0' AND web_id = ?"; 
				}
				else
				{
					$qr_d = " AND web_id = ?"; 
				} 
			}	
		}
		
		if($_SESSION[$this->mod.'_search'] <> '')
		{
			foreach($this->config_search_field as $f)
			{
				$qr_d = $qr_d." AND ".$f." LIKE '%".$_SESSION[$this->mod.'_search']."%'"; 
			} 
		} 
		 
		$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE id > 0 ".$qr_d;   
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$total_rows = json_decode($res); 
		$total_rows = $total_rows[0]->count_id;
		$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_max_rows'])-1;
		   
		$qr_d = '';  
		if($this->mod == 'page')
		{
			$qr_d = " AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."' AND web_id = ? AND page_id = '".$_SESSION[$this->mod.'_group_page']."' "; 
		}
		else
		{
			if($_SESSION[$this->mod.'_group'] <> '0')
			{
				$qr_d = " AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."' AND web_id = ?";
			}
			else
			{ 
				if($this->mod_cat_field <> '')
				{
					$qr_d = " AND ".$this->mod_cat_field." = '0' AND web_id = ?"; 
				}
				else
				{
					$qr_d = " AND web_id = ?"; 
				} 
			}	
		}
		
		if($_SESSION[$this->mod.'_search'] <> '')
		{
			foreach($this->config_search_field as $f)
			{
				$qr_d = $qr_d." AND ".$f." LIKE '%".$_SESSION[$this->mod.'_search']."%'"; 
			} 
		} 
		 
		$qr_d = $qr_d . ' ORDER BY '.$_SESSION[$this->mod.'_sort_1'].' '.$_SESSION[$this->mod.'_sort_2'];
		$qr_d = $qr_d . ' LIMIT '.$start_rows.','.$_SESSION[$this->mod.'_max_rows'];

		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE id > 0 ".$qr_d;
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		    		  
		$data['list'] = json_decode($res); 
		$data['this_cat'] = $TextLanguage->lang($this->mod);
		$data['this_page'] = 'แสดงรายการ';
		$data['title'] = $data['this_page'] . ' : ' . $this->mod_title . ' - หน่วยงานกรุงเทพมหานคร'; 
		$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];		 
		$data['content_head'] = '( '.$total_rows.' ข้อมูล )';		  
		$data['config_mod'] = $this->mod;
		$data['config_mod_model'] = $this->mod_model;
		$data['config_mod_title'] = $this->mod_title;	
		$data['config_mod_cat_order_by'] = $this->mod_cat_order_by;	
		$data['config_mod_sub_mod'] = $this->mod_sub_mod;
		$data['config_mod_sub_model'] = $this->mod_sub_model;
		$data['config_mod_sub_field'] = $this->mod_sub_field;	
		$data['config_search_text'] = $_SESSION[$this->mod.'_search']; 
		$data['config_search_field'] = $this->config_search_field;
		$data['config_sort_1'] = $_SESSION[$this->mod.'_sort_1'];
		$data['config_sort_2'] = $_SESSION[$this->mod.'_sort_2'];  
		$data['config_max_rows'] = $_SESSION[$this->mod.'_max_rows'];
		$data['config_page_num'] = $_SESSION[$this->mod.'_page_num']; 
		$data['config_total_rows'] = $total_rows;
		$data['config_total_pages'] = $total_pages;  		
		$data['config_list_column_title'] = $this->config_list_column_title;
		$data['config_list_column_width'] = $this->config_list_column_width;
		$data['config_list_column_name'] = $this->config_list_column_name; 		 
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;	
		$data['config_list_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_list');
		$data['config_list_footer_js'] = $this->config_list_footer_js;		
		$data['config_use_add'] = $this->config_use_add;
		$data['config_use_edit'] = $this->config_use_edit;
		$data['config_use_delete'] = $this->config_use_delete;
		$data['config_use_sort'] = $this->config_use_sort; 
		$data['config_use_status'] = $this->config_use_status; 		 
		$data['config_mod_cat_mod'] = $this->mod_cat_mod;  
		$data['config_mod_sub_mod'] = $this->mod_sub_mod;  
		$data['config_mod_cat_field'] = $this->mod_cat_field;  
		$data['config_mod_cat_model'] = $this->mod_cat_model;  
		$data['config_dropdown_cat_file'] = $this->config_dropdown_cat_file;  
		$data['list_cat'] = '';		 
		$data['config_dropdown_title'] = $TextLanguage->lang($this->mod_cat_dropdown_title);
		$data['config_sort1'] = $this->config_sort1;
		$data['config_sort2'] = $this->config_sort2;
		$data['config_connect_page'] = $this->config_connect_page;
		  	
		if($this->mod_cat_model <> '')
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ".$q_mod_cat_order_by;
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ".$q_mod_cat_order_by;
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res); 
			$list = json_decode($res);
			  
			if($this->mod == 'page')
			{
				foreach ($list as $row)
				{  
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE ".$this->mod_cat_field." = '".$row->id."' AND page_id = ? ";
					$v = '0';
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
					$count_id_res = json_decode($res); 
					$data['list_cat_count'][] = $count_id_res[0]->count_id;     
				} 
				
				if(@$_SESSION[$this->mod.'_group'] > 0)
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND id = '".$_SESSION[$this->mod.'_group']."' ".$q_mod_cat_order_by;
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
					$r = json_decode($res); 
					$data['list_menu_title'] = $r[0]->title;	
				}
			}
			else
			{
				$mod_cat_run = 1;
				
				foreach ($list as $row)
				{  
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE ".$this->mod_cat_field." = ?";
					$v = $row->id;
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
					$count_id_res = json_decode($res); 
					$data['list_cat_count'][] = $count_id_res[0]->count_id;     
					 
					$mod_cat_run++;     
				}  	
				
				if($mod_cat_run == 1)
				{  
					exit; 
				}
			}  
		}
		 	
		if($this->mod_sub_model <> '')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ".$q_mod_cat_order_by;
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
			$list = json_decode($res);    
			   
			foreach ($list as $row)
			{  
				if($this->mod == 'main_menu')
				{
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_sub_model)." WHERE ".$this->mod_sub_field." = ? AND page_id = '0'";
					$v = $row->id; 
				}
				else
				{
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_sub_model)." WHERE ".$this->mod_sub_field." = ?";
					$v = $row->id;  
				} 
				
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_sub_model)),$q,$v);
				$count_res = json_decode($res);  
				 
				$data['list_sub_count'][$row->id] = $count_res[0]->count_id;  
			}  	
		}
		 
		$data['this_group_page'] = $_SESSION[$this->mod.'_group_page'];  
		 
		if($this->mod == 'page')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ".$q_mod_cat_order_by;
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
			$list = json_decode($res);  
			 
			foreach ($list as $row)
			{  
				$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND page_id = '".$row->id."' ".$q_mod_cat_order_by;
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);				
				$count_res = json_decode($res);  
				$data['list_page_count'][$row->id] = $count_res[0]->count_id; 
				 
				$this_field_model = '';
				$this_field_model_name = '';
				switch($row->page_type)
				{
					case "banner" : 
						$this_field_model = 'Portal_website_banner_model';
						$this_field_model_cat = 'Portal_website_banner_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "news" : 
						$this_field_model = 'Portal_website_news_model';
						$this_field_model_cat = 'Portal_website_news_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "calendar" : 
						$this_field_model = 'Portal_website_activities_model';
						$this_field_model_cat = 'Portal_website_activities_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "gallery" : 
						$this_field_model = 'Portal_website_gallery_model';
						$this_field_model_cat = 'Portal_website_gallery_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "webboard" : 
						$this_field_model = 'Portal_website_webboard_model';
						$this_field_model_cat = 'Portal_website_webboard_cat_model';
						$this_field_model_name = 'room_id';
						break;
					case "poll" : 
						$this_field_model = 'Portal_website_poll_model';
						$this_field_model_cat = 'Portal_website_poll_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "question" : 
						$this_field_model = 'Portal_website_question_model';
						$this_field_model_cat = 'Portal_website_question_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "faq" : 
						$this_field_model = 'Portal_website_faq_model';
						$this_field_model_cat = 'Portal_website_faq_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "download" : 
						$this_field_model = 'Portal_website_download_model';
						$this_field_model_cat = 'Portal_website_download_cat_model';
						$this_field_model_name = 'cat_id';
						break; 
				} 
				 
				if($this_field_model <> '')
				{ 
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this_field_model)." WHERE web_id = ? AND ".$this_field_model_name." = '".$row->data_id."' ";
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_field_model)),$q,$v);				
					$count_res = json_decode($res);  
					$data['list_page_mod_count'][$row->id] = $count_res[0]->count_id;     
					  
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_field_model_cat)." WHERE web_id = ? AND id = '".$row->data_id."' ";
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_field_model_cat)),$q,$v);  
					$r_ex1 = json_decode($res);
					    
					$data['list_page_mod_title'][$row->id] = $r_ex1[0]->title;
				}
			}  	
			
			$str_navi = '';
			if($_SESSION[$this->mod.'_group_page'] > 0)
			{ 
				$start_loop = true;
				$this_id = $_SESSION[$this->mod.'_group_page'];
				$this_run = 1;
				while($start_loop)
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND id = '".$this_id."'";
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
					$ro = json_decode($res);   
					 
					if($this_run == 1)
					{
						$str_navi = '<td> &nbsp; /  &nbsp;<b>' . $ro[0]->title . '</b> </td>'.$str_navi;	
					}
					else
					{
						$str_navi = '<td> &nbsp; / &nbsp;<span class="link-text"><a href="http://127.0.0.1:8000/manage-admin/set_cat_page?m=page&id='.$ro[0]->id.'">'.$ro[0]->title.'</a></span> </td>'.$str_navi;
					}
					 
					if($ro[0]->page_id == '0')
					{
						$start_loop = false;	
					}
					else
					{
						$this_id = $ro[0]->page_id;
					}
					$this_run = 2;
				} 
			}
			$data['list_str_navi'] = $str_navi;  
			 
			if($_SESSION[$this->mod.'_group'] <> '0')
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND id = '".$_SESSION[$this->mod.'_group']."'";
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);     
				$list_ro_group = json_decode($res);
				
				if($list_ro_group[0]->page_type == 'group')
				{
					//$data['config_use_add'] = true;
				} 	
				else
				{
					$data['config_use_add'] = false;
				}
			}
			if($_SESSION[$this->mod.'_group'] == '0')
			{
				$data['config_use_add'] = false;
			}  
			
			unset($_SESSION['banner_set_cat']);
			unset($_SESSION['news_set_cat']);
			unset($_SESSION['activities_set_cat']);
			unset($_SESSION['gallery_set_cat']);
			unset($_SESSION['webboard_set_cat']);
			unset($_SESSION['poll_set_cat']);
			unset($_SESSION['question_set_cat']);
			unset($_SESSION['faq_set_cat']);
			unset($_SESSION['download_set_cat']);	
			unset($_SESSION['page_set_cat']);
			unset($_SESSION['contentbox_set_cat']); 
			
			unset($_SESSION['banner_set_cat_main_menu']);
			unset($_SESSION['news_set_cat_main_menu']);
			unset($_SESSION['activities_set_cat_main_menu']);
			unset($_SESSION['gallery_set_cat_main_menu']);
			unset($_SESSION['webboard_set_cat_main_menu']);
			unset($_SESSION['poll_set_cat_main_menu']);
			unset($_SESSION['question_set_cat_main_menu']);
			unset($_SESSION['faq_set_cat_main_menu']);
			unset($_SESSION['download_set_cat_main_menu']);	
			unset($_SESSION['page_set_cat_main_menu']);
			unset($_SESSION['contentbox_set_cat_main_menu']);   
			
			unset($_SESSION['banner_set_cat_top_menu']);
			unset($_SESSION['news_set_cat_top_menu']);
			unset($_SESSION['activities_set_cat_top_menu']);
			unset($_SESSION['gallery_set_cat_top_menu']);
			unset($_SESSION['webboard_set_cat_top_menu']);
			unset($_SESSION['poll_set_cat_top_menu']);
			unset($_SESSION['question_set_cat_top_menu']);
			unset($_SESSION['faq_set_cat_top_menu']);
			unset($_SESSION['download_set_cat_top_menu']);	
			unset($_SESSION['page_set_cat_top_menu']);
			unset($_SESSION['contentbox_set_cat_top_menu']); 
			
			unset($_SESSION['banner_set_cat_footer_menu']);
			unset($_SESSION['news_set_cat_footer_menu']);
			unset($_SESSION['activities_set_cat_footer_menu']);
			unset($_SESSION['gallery_set_cat_footer_menu']);
			unset($_SESSION['webboard_set_cat_footer_menu']);
			unset($_SESSION['poll_set_cat_footer_menu']);
			unset($_SESSION['question_set_cat_footer_menu']);
			unset($_SESSION['faq_set_cat_footer_menu']);
			unset($_SESSION['download_set_cat_footer_menu']);	
			unset($_SESSION['page_set_cat_footer_menu']);
			unset($_SESSION['contentbox_set_cat_footer_menu']);  
		}
		
		if($this->mod == 'main_menu' || $this->mod == 'top_menu' || $this->mod == 'footer_menu')
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ".$q_mod_cat_order_by;  
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);  
			$list = json_decode($res); 
			  
			foreach ($list as $row)
			{    
				$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ?";  
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);  
				$count_id_res = json_decode($res); 
				$data['list_page_count'][$row->id] = $count_id_res[0]->count_id; 
				  
				$this_field_model = '';
				$this_field_model_name = '';
				switch($row->page_type)
				{
					case "banner" : 
						$this_field_model = 'Portal_website_banner_model';
						$this_field_model_cat = 'Portal_website_banner_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "news" : 
						$this_field_model = 'Portal_website_news_model';
						$this_field_model_cat = 'Portal_website_news_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "calendar" : 
						$this_field_model = 'Portal_website_activities_model';
						$this_field_model_cat = 'Portal_website_activities_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "gallery" : 
						$this_field_model = 'Portal_website_gallery_model';
						$this_field_model_cat = 'Portal_website_gallery_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "webboard" : 
						$this_field_model = 'Portal_website_webboard_model';
						$this_field_model_cat = 'Portal_website_webboard_cat_model';
						$this_field_model_name = 'room_id';
						break;
					case "poll" : 
						$this_field_model = 'Portal_website_poll_model';
						$this_field_model_cat = 'Portal_website_poll_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "question" : 
						$this_field_model = 'Portal_website_question_model';
						$this_field_model_cat = 'Portal_website_question_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "faq" : 
						$this_field_model = 'Portal_website_faq_model';
						$this_field_model_cat = 'Portal_website_faq_cat_model';
						$this_field_model_name = 'cat_id';
						break;
					case "download" : 
						$this_field_model = 'Portal_website_download_model';
						$this_field_model_cat = 'Portal_website_download_cat_model';
						$this_field_model_name = 'cat_id';
						break; 
				} 
				 
				if($this_field_model <> '')
				{  
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this_field_model)." WHERE web_id = ? AND ".$this_field_model_name." = '".$row->data_id."'";   
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_field_model)),$q,$v);  
					$count_id_res = json_decode($res);   
					$data['list_page_mod_count'][$row->id] = $count_id_res[0]->count_id; 
					 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_field_model_cat)." WHERE web_id = ? AND id = '".$row->data_id."'";  
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_field_model_cat)),$q,$v);  
					$r_ex1 = json_decode($res);   
					$data['list_page_mod_title'][$row->id] = $r_ex1[0]->title; 
				}
			}  	
			  
			unset($_SESSION['banner_set_cat']);
			unset($_SESSION['news_set_cat']);
			unset($_SESSION['activities_set_cat']);
			unset($_SESSION['gallery_set_cat']);
			unset($_SESSION['webboard_set_cat']);
			unset($_SESSION['poll_set_cat']);
			unset($_SESSION['question_set_cat']);
			unset($_SESSION['faq_set_cat']);
			unset($_SESSION['download_set_cat']);	
			unset($_SESSION['page_set_cat']);
			unset($_SESSION['contentbox_set_cat']); 
			
			unset($_SESSION['banner_set_cat_main_menu']);
			unset($_SESSION['news_set_cat_main_menu']);
			unset($_SESSION['activities_set_cat_main_menu']);
			unset($_SESSION['gallery_set_cat_main_menu']);
			unset($_SESSION['webboard_set_cat_main_menu']);
			unset($_SESSION['poll_set_cat_main_menu']);
			unset($_SESSION['question_set_cat_main_menu']);
			unset($_SESSION['faq_set_cat_main_menu']);
			unset($_SESSION['download_set_cat_main_menu']);	
			unset($_SESSION['page_set_cat_main_menu']);
			unset($_SESSION['contentbox_set_cat_main_menu']);   
			
			unset($_SESSION['banner_set_cat_top_menu']);
			unset($_SESSION['news_set_cat_top_menu']);
			unset($_SESSION['activities_set_cat_top_menu']);
			unset($_SESSION['gallery_set_cat_top_menu']);
			unset($_SESSION['webboard_set_cat_top_menu']);
			unset($_SESSION['poll_set_cat_top_menu']);
			unset($_SESSION['question_set_cat_top_menu']);
			unset($_SESSION['faq_set_cat_top_menu']);
			unset($_SESSION['download_set_cat_top_menu']);	
			unset($_SESSION['page_set_cat_top_menu']);
			unset($_SESSION['contentbox_set_cat_top_menu']); 
			
			unset($_SESSION['banner_set_cat_footer_menu']);
			unset($_SESSION['news_set_cat_footer_menu']);
			unset($_SESSION['activities_set_cat_footer_menu']);
			unset($_SESSION['gallery_set_cat_footer_menu']);
			unset($_SESSION['webboard_set_cat_footer_menu']);
			unset($_SESSION['poll_set_cat_footer_menu']);
			unset($_SESSION['question_set_cat_footer_menu']);
			unset($_SESSION['faq_set_cat_footer_menu']);
			unset($_SESSION['download_set_cat_footer_menu']);	
			unset($_SESSION['page_set_cat_footer_menu']);
			unset($_SESSION['contentbox_set_cat_footer_menu']);  
		}
		 
		if($this->config_connect_page)
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? ";  
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);  
			$list = json_decode($res); 
			 
			foreach ($list as $row)
			{  
				$this_field = 'aaa';
				$this_field_model = 'aaa';
				switch($this->mod)
				{
					case "banner_cat" :
						$this_field = 'banner';
						$this_field_model = 'Portal_website_banner_model';
						break;
					case "news_cat" :
						$this_field = 'news';
						$this_field_model = 'Portal_website_news_model';
						break;
					case "activities_cat" :
						$this_field = 'calendar';
						$this_field_model = 'Portal_website_activities_model';
						break;
					case "gallery_cat" :
						$this_field = 'gallery';
						$this_field_model = 'Portal_website_gallery_model';
						break;
					case "webboard_cat" :
						$this_field = 'webboard';
						$this_field_model = 'Portal_website_webboard_model';
						break;
					case "poll_cat" :
						$this_field = 'poll';
						$this_field_model = 'Portal_website_poll_model';
						break;
					case "question_cat" :
						$this_field = 'question';
						$this_field_model = 'Portal_website_question_model';
						break;
					case "faq_cat" :
						$this_field = 'faq';
						$this_field_model = 'Portal_website_faq_model';
						break;
					case "download_cat" :
						$this_field = 'download';
						$this_field_model = 'Portal_website_download_model';
						break; 
				}
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND data_id = '".$row->id."' AND page_type = '".$this_field."' ";  
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);  
				$data['list_check_page'][$row->id] = json_decode($res);     
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? AND data_id = '".$row->id."' AND page_type = '".$this_field."' ";  
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);  
				$data['list_check_main_menu'][$row->id] = json_decode($res); 
				 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_top_menu_page_model')." WHERE web_id = ? AND data_id = '".$row->id."' AND page_type = '".$this_field."' ";  
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_top_menu_page_model')),$q,$v);  
				$data['list_check_top_menu'][$row->id] = json_decode($res);  
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_footer_menu_page_model')." WHERE web_id = ? AND data_id = '".$row->id."' AND page_type = '".$this_field."' ";  
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_footer_menu_page_model')),$q,$v);  
				$data['list_check_footer_menu'][$row->id] = json_decode($res);  
			}  				
		} 
		 
        return view('manage.'.$this->mod.'.list',$data);
		//return view('manage.list',$data);
    } 
    public function lists_sort()
	{ 
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
		$start_rows = $_SESSION[$this->mod.'_page_num'] * $_SESSION[$this->mod.'_max_rows']; 
		 
		if($_SESSION[$this->mod.'_group'] <> '0')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."'";	 
		}
		else
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND ".$this->mod_cat_field." = '0'";	 
		}	 
			
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$total_rows = json_decode($res);
		$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_max_rows'])-1;
		 
		if($_SESSION[$this->mod.'_group'] <> '0')
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND ".$this->mod_cat_field." = '".$_SESSION[$this->mod.'_group']."' ORDER BY sort ASC LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_max_rows']."";
		}
		else
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE web_id = ? AND ".$this->mod_cat_field." = '0' ORDER BY sort ASC LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_max_rows']."";
		}	 
		
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
		$q = json_decode($res);
		  
		$data['list'] = $q; 
		$data['this_cat'] = $TextLanguage->lang($this->mod);
		$data['this_page'] = $TextLanguage->lang('list');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal'); 
		$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
		$data['content_head'] = '( ' . $total_rows . ' ' . $TextLanguage->lang('items') . ' )'; 
		$data['config_mod'] = $this->mod;
		$data['config_search_text'] = $_SESSION[$this->mod.'_search']; 
		$data['config_sort_1'] = $_SESSION[$this->mod.'_sort_1'];
		$data['config_sort_2'] = $_SESSION[$this->mod.'_sort_2'];  
		$data['config_max_rows'] = $_SESSION[$this->mod.'_max_rows'];
		$data['config_page_num'] = $_SESSION[$this->mod.'_page_num']; 
		$data['config_total_rows'] = $total_rows;
		$data['config_total_pages'] = $total_pages;  
		$data['config_list_column_title'] = $this->config_list_column_title;
		$data['config_list_column_width'] = $this->config_list_column_width;
		$data['config_list_column_name'] = $this->config_list_column_name;  
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;
		$data['config_list_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_list');
		$data['config_list_footer_js'] = $this->config_list_footer_js;
		$data['config_use_add'] = $this->config_use_add;
		$data['config_use_edit'] = $this->config_use_edit;
		$data['config_use_delete'] = $this->config_use_delete;
		$data['config_use_sort'] = $this->config_use_sort; 
		$data['config_use_status'] = $this->config_use_status;  
		$data['config_mod_cat_field'] = $this->mod_cat_field;  
		$data['config_mod_cat_model'] = $this->mod_cat_model;  
		$data['config_dropdown_cat_file'] = $this->config_dropdown_cat_file;  
		$data['list_cat'] = '';
		$data['config_dropdown_title'] = $TextLanguage->lang($this->mod_cat_dropdown_title);
		$data['this_group_page'] = $_SESSION[$this->mod.'_group_page'];  
		
		if($this->mod_cat_model <> '')
		{ 
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by."";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$data['list_cat'] = json_decode($res);
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? ORDER BY ".$this->mod_cat_order_by."";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
			$list = json_decode($res);
			
			if($this->mod == 'page')
			{
				foreach ($list as $row)
				{   
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE ".$this->mod_cat_field." = ? AND page_id = '0'";	 	
					$v = $row->id;
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
					$data['list_cat_count'][] = json_decode($res);    
				} 
				
				if(@$_SESSION[$this->mod.'_group'] > 0)
				{ 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_cat_model)." WHERE web_id = ? AND id = '".$_SESSION[$this->mod.'_group']."' ORDER BY ".$this->mod_cat_order_by;	 	
					$v = '';
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_cat_model)),$q,$v);
					$q = json_decode($res);
					 
					$r = $q;
					$data['list_menu_title'] = $r[0]->title;	
				}
				
			}
			else
			{
				$mod_cat_run = 1;
				
				foreach ($list as $row)
				{   
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->mod_model)." WHERE ".$this->mod_cat_field." = '".$row->id."'";	 	
					$v = '';
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),$q,$v);
					$data['list_cat_count'][] = json_decode($res);
					 
					$mod_cat_run++;     
				}  	
				
				if($mod_cat_run == 1)
				{ 
					exit;
				}
			}  
		}
		
		$data['config_list_footer_js'] = 'mainmenuFocus(1,11,2); btn2stageFocus(0,2);'; 
		$this->load->view('panel/' . $this->mod . '/list_sort', $data);
	}	
	public function save_list()
	{ 
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
		$list_order = $CustomHelper->input_post('list_order', TRUE);  
		$list_order = explode(',',$list_order);
		
		while($each = each($list_order))
		{
			if(strlen($each[1]) > 1)
			{
				$each_sub = explode('=',$each[1]);  
				$d = new \stdClass();  
				$d->sort = $each_sub[1]+1;
				$d->last_update = date('U'); 
				
				$this_qr = ''; 
				foreach($d as $key=>$value) 
				{
					$this_qr = $this_qr.$key." = '".addslashes($value)."',";
				}
				$this_qr = substr($this_qr,0,-1);  	 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$each_sub[0]."'",''); 
			} 
		}
		
		
		$CustomHelper->add_log('' . $this->mod_title . ' - Sort',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT'); 
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/lists_sort?m=<?php echo $this->mod ?>" /><?php
		exit; 
	}	
	public function set_cat_sort($id = '0')
	{
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		  
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0';  
		  
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/lists_sort?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_cat_from_page($id = '0')
	{
        if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		 
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat'] = '1';
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_cat_from_main_menu($id = '0')
	{
        if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		  
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_main_menu'] = '1';
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_cat_from_top_menu($id = '0')
	{
        if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		  
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_top_menu'] = '1';
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
        
		exit;
	}	
	public function set_cat_from_footer_menu($id = '0')
	{
        if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_footer_menu'] = '1';
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_cat_page($id = '0')
	{
        if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
		
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		 
        $_SESSION[$this->mod.'_page_num'] = '0'; 
		$_SESSION[$this->mod.'_group_page'] = $id;  
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_max_rows($a = '5')
	{
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		
		$a = '0';
		if(isset($_GET['p']))
		{
			$a = $_GET['p'];
		}
		
        $_SESSION[$this->mod.'_max_rows'] = $a;
		$_SESSION[$this->mod.'_page_num'] = '0';  
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	}	
	public function set_page_num($a = '0')
	{
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login(); 
		
		$a = '0';
		if(isset($_GET['p']))
		{
			$a = $_GET['p'];
		}
		 
        $_SESSION[$this->mod.'_page_num'] = $a;  
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
        
		exit;
	}	
	public function set_order_by($a = 'id',$b = 'ASC')
	{
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		
		$a = 'id';
		if(isset($_GET['sort1']))
		{
			$a = $_GET['sort1'];
		}
		$b = 'ASC';
		if(isset($_GET['sort2']))
		{
			$b = $_GET['sort2'];
		}
		 
        $_SESSION[$this->mod.'_sort_1'] = $a;
		$_SESSION[$this->mod.'_sort_2'] = $b; 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
         
		exit;
	} 	
	public function set_status_show($a = '0')
	{ 
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		
		$a = '0';
		if(isset($_GET['id']))
		{
			$a = $_GET['id'];
		}
		
		$d = new \stdClass(); 
		$d->status = '1';
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$a."'",''); 
		 
		$CustomHelper->add_log('Status Show - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_SHOW');
		 
        ?> 
		<meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
		<?php 
		exit;
	}	
	public function set_status_hide($a = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		
		$a = '0';
		if(isset($_GET['id']))
		{
			$a = $_GET['id'];
		}
		 
		$d = new \stdClass(); 
		$d->status = '0';
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);
		  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$a."'",''); 
		 
		$CustomHelper->add_log('Status Hide - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_HIDE');
		  
        ?> 
		<meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
		<?php 
		exit;		
	}	
	public function set_sort()
	{   
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
	 
		foreach($_POST['sort'] as $post_k=>$post_v)
		{  
			$d = new \stdClass(); 
			$d->sort = $post_v;
 
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->mod_model)),"UPDATE ".$CustomHelper->model_to_table($this->mod_model)." SET ".$this_qr." WHERE web_id = '".$_SESSION['panel_id']."' AND id = '".$post_k."'",'');        
		} 
		 
		$CustomHelper->add_log('Update Sort - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_SORT');		 
        ?>
		<meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/list?m='.$this->mod.'' ?>" />
		<?php 
		exit;		
	}	
	public function panels($mod='',$act='',$id='',$id2='',$main_type='')
	{
		if($mod != '' && $act != '' && $id != '' && $id2 != '' && $main_type != '') 
		{ 
			?><meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/'.$act.'?m='.$mod.'&id='.$id.'&id2='.$id2.'&main_type='.$main_type; ?>" /><?php
			exit;
		}
		else if($mod != '' && $act != '' && $id != '' && $id2 != '')
		{
			?><meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/'.$act.'?m='.$mod.'&id='.$id.'&id2='.$id2.''; ?>" /><?php
			exit;
		}
		else if($mod != '' && $act != '' && $id != '')
		{
			?><meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/'.$act.'?m='.$mod.'&id='.$id.''; ?>" /><?php
			exit;
		}
		else if($mod != '' && $act != '')
		{     
			?><meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/'.$act.'?m='.$mod.''; ?>" /><?php
			exit;
		}
		else if($mod != '')
		{
			?><meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/list?m='.$mod; ?>" /><?php
			exit;
		} 
		exit;	
	}	
	public function search()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
		$_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_search'] = trim($_POST["s"]);   
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php 
		exit;
	}	
	public function search_reset()
	{
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
        $_SESSION[$this->mod.'_search'] = '';
		$_SESSION[$this->mod.'_page_num'] = '0'; 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php         
		exit;
	}		
	public function set_cat($id = '0')
	{
      	if(isset($_GET['id']))
		{
			$id = $_GET['id'];
		}
		else
		{
			$id = '0';	
		}
	  
	    $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();  
		 
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0';  
		 
        ?><meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/manage-admin/list?m=<?php echo $this->mod ?>" /><?php
        
		exit;
	}
	
	public function url_submit()
    {        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		$this->include_check_login();
		 
		$c = "\App\Conf\\".$_GET['m'];
		$m = new $c();  
		$m->url_submit();
    } 
}