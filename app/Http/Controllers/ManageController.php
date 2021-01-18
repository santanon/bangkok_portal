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
        return view('manage.action');
    } 
    public function add()
    {        
        $this->include_check_login();
        return view('manage.form',$data);
    } 
    public function comment($v1 = '0')
	{
		$this->include_header(); 
        
        /*
		$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id' => $v1,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
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
			$this->load->model($comment_model);
			$d = new stdClass();  
			$d->orderby = 'id ASC';
			$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row[0]->id);
			$data['list_comment'] = $this->{$comment_model}->select_data($d);   
			  
			$this->load->view('panel/comment', $data); 
		}
		else
		{
			exit;	
        } 
        */  
    }
    public function comment_text($v1 = '0',$v2 = '')
	{
		$this->include_header(); 
		 
		/*$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id' => $v1,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
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
			$this->load->model($comment_model);
			$d = new stdClass();  
			$d->orderby = 'id ASC';
			$d->where = array('web_id'=>$_SESSION['panel_id'],'this_id'=>$v1,'main_type'=>$v2);
			$data['list_comment'] = $this->{$comment_model}->select_data($d);   
			  
			$this->load->view('panel/comment', $data); 
		}
		else
		{
			exit;	
		} */  
    }
    public function comment_delete($v1 = '0',$v2 = '0',$v3 = '')
	{
		$this->include_header();  
		
		/*$comment_model = 'portal_website_main_comment_model';
		$this->load->model($comment_model); 
		$this->{$comment_model}->delete_data($v1,'id',$_SESSION['panel_id'],'web_id');   */
    }    
    public function delete($id = '0')
	{ 
		$this->include_header(); 
        
        /*
        $this->load->model($this->mod_model); 
		
		if($this->mod == 'page')
		{
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id'],'page_id' => $id); 
			$d->count = true; 
			$q = $this->{$this->mod_model}->select_data($d);   
			
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
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id'],'id' => $id); 
			$q = $this->{$this->mod_model}->select_data($d);  
			$t = $q->result(); 	
			
			@unlink('./upload/inbox/'.$t[0]->file1);
		}
		
		if(strlen($this->mod_sub_model) > 3)
		{ 
			$this->load->model($this->mod_sub_model); 
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id'],$this->mod_sub_field => $id); 
			$d->count = true; 
			$q = $this->{$this->mod_sub_model}->select_data($d);   
			
			if($q > 0)
			{
				$this->{$this->mod_sub_model}->delete_data($id,$this->mod_sub_field,$_SESSION['panel_id'],'web_id');  
			}
		}
		 
		$d = new stdClass(); 
		$d->column = '*';
		$d->where = array('web_id' => $_SESSION['panel_id'],'id' => $id);
		$d->like = array();
		$d->orderby = 'id DESC';
		$d->limit_row = '1';
		$d->limit_offset = '';
		$d->count = false; 
		$q = $this->{$this->mod_model}->select_data($d);  
		$t = $q->result();
		$this_title = $t[0]->title; 
		
		$this->{$this->mod_model}->delete_data($id,'id',$_SESSION['panel_id'],'web_id'); 
		
		$this->load->model('Portal_website_log_model');
		$this->Portal_website_log_model->add_log($this->mod_title . ' - Delete (' . $this_title . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_DELETE');
		*/
	} 
    public function edit()
    {        
        $this->include_check_login();
        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		
         
        $m = $CustomHelper->module_setting($_GET['m']);
        
        $data['mode']                       = 'edit';
        $data['text_header']                = $m['text_header'].' : แก้ไข';
        $data['text_header_description']    = $m['text_header_description'];
        $data['col_list']                   = explode(',',$m['col_list']);
 
        $q = "SELECT * FROM tbl_".$m['table_name']." WHERE id = ?";
        $v = $_SESSION['panel_id'];
        $res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_'.$m['api_name']),$q,$v);
 
        if($res != '')
        {
            $data['rows'] = json_decode($res);
        }
        else
        {
            ?>
            ไม่พบข้อมูล...
            <?php
            exit;
        }
         
        return view('manage.form',$data);
    } 
    public function edit_logo()
    {        
        $this->include_check_login();
        
        $CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
         
        $m = $CustomHelper->module_setting($_GET['m']);
        
        $data['mode']                       = 'edit';
        $data['text_header']                = $m['text_header'].' : แก้ไข';
        $data['text_header_description']    = $m['text_header_description'];
        $data['col_list']                   = explode(',',$m['col_list']);
 
        $q = "SELECT * FROM tbl_".$m['table_name']." WHERE id = ?";
        $v = $_SESSION['panel_id'];
        $res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_'.$m['api_name']),$q,$v);
 
        if($res != '')
        {
            $data['rows'] = json_decode($res);
        }
        else
        {
            ?>
            ไม่พบข้อมูล...
            <?php
            exit;
        }
         
        return view('manage.form_logo',$data);
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
		$data['this_page'] = 'แสดรายการ';
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
					$q = "SELECT COUNT(id) AS count_id FROM ".$CustomHelper->model_to_table($this->{$this_field_model})." WHERE web_id = ? AND ".$this_field_model_name." = '".$row->data_id."' ";
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->{$this_field_model})),$q,$v);				
					$count_res = json_decode($res);  
					$data['list_page_mod_count'][$row->id] = $count_res[0]->count_id;     
					  
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this->{$this_field_model_cat})." WHERE web_id = ? AND id = '".$row->data_id."' ";
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this->{$this_field_model_cat})),$q,$v);  
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
						$str_navi = '<td>  &nbsp; /  &nbsp;<b>' . $ro[0]->title . '</b>  </td>' . $str_navi;	
					}
					else
					{
						$str_navi = '<td>  &nbsp; /  &nbsp;<span class="link-text"><a href="' . base_url() . 'panels/page/set_cat_page/' . $ro[0]->id . '">' . $ro[0]->title . '</a></span>  </td>' . $str_navi;	
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
        /*
        $this->include_header();  
		$start_rows = $_SESSION[$this->mod.'_page_num'] * $_SESSION[$this->mod.'_max_rows']; 
		$this->load->model($this->mod_model); 
		$d = new stdClass(); 
		if($_SESSION[$this->mod.'_group'] <> '0')
		{
			$d->where = array($this->mod_cat_field => $_SESSION[$this->mod.'_group'],'web_id' => $_SESSION['panel_id']);	
		}
		else
		{ 
			$d->where = array($this->mod_cat_field => '0','web_id' => $_SESSION['panel_id']);	
		}	 
		$d->count = true; 
		$total_rows = $this->{$this->mod_model}->select_data($d);
		$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_max_rows'])-1;
		
		$d = new stdClass();  
		if($_SESSION[$this->mod.'_group'] <> '0')
		{
			$d->where = array($this->mod_cat_field => $_SESSION[$this->mod.'_group'],'web_id' => $_SESSION['panel_id']);	
		}
		else
		{ 
			$d->where = array($this->mod_cat_field => '0','web_id' => $_SESSION['panel_id']);	 
		}	 
		$d->orderby = 'sort ASC';
		$d->limit_row = $_SESSION[$this->mod.'_max_rows'];
		$d->limit_offset = $start_rows;
		$d->count = false; 
		$q = $this->{$this->mod_model}->select_data($d);  
		 
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
			$this->load->model($this->mod_cat_model);
			
			$d = new stdClass();  
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$d->orderby = $this->mod_cat_order_by;
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			 
			$d = new stdClass(); 
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$d->orderby = $this->mod_cat_order_by;
			$list = $this->{$this->mod_cat_model}->select_data($d);
			
			if($this->mod == 'page')
			{
				foreach ($list->result() as $row)
				{  
					$d = new stdClass();  
					$d->where = array($this->mod_cat_field => $row->id,'page_id'=>'0'); 
					$d->count = true; 
					$data['list_cat_count'][] = $this->{$this->mod_model}->select_data($d);      
				} 
				
				if(@$_SESSION[$this->mod.'_group'] > 0)
				{
					$d = new stdClass();  
					$d->orderby = $this->mod_cat_order_by;
					$d->where = array('web_id'=>$_SESSION['panel_id'],'id'=>$_SESSION[$this->mod.'_group']);
					$q = $this->{$this->mod_cat_model}->select_data($d);   
					$r = $q->result();
					$data['list_menu_title'] = $r[0]->title;	
				}
				
			}
			else
			{
				$mod_cat_run = 1;
				
				foreach ($list->result() as $row)
				{  
					$d = new stdClass();  
					$d->where = array($this->mod_cat_field => $row->id); 
					$d->count = true; 
					$data['list_cat_count'][] = $this->{$this->mod_model}->select_data($d); 
					
					$mod_cat_run++;     
				}  	
				
				if($mod_cat_run == 1)
				{ 
					exit;
				}
			}  
		}
		
		$data['config_list_footer_js'] = 'mainmenuFocus(1,11,2); btn2stageFocus(0,2);'; 
		$this->load->view('panel/' . $this->mod . '/list_sort', $data); */
	}	
	public function save_list()
	{ 
        /*
        $this->include_header();  
		$this->load->model($this->mod_model);  
		
		$list_order = $this->input->post('list_order', TRUE);  
		$list_order = explode(',',$list_order);
		
		while($each = each($list_order))
		{
			if(strlen($each[1]) > 1)
			{
				$each_sub = explode('=',$each[1]);  
				$d = new stdClass();  
				$d->sort = $each_sub[1]+1;
				$d->last_update = date('U');  
				$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$each_sub[0],'id');    	
			} 
		}
		 
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Sort',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/lists_sort');	
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists_sort" /><?
        */
	}	
	public function search()
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_search'] = trim($_POST["s"]);  
		//redirect('/panels/' . $this->mod . '/lists');	
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
				
	}	
	public function search_reset()
	{
        /*
        $_SESSION[$this->mod.'_search'] = '';
		$_SESSION[$this->mod.'_page_num'] = '0';
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0';  
		
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat_sort($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0';  
		 
		//redirect('/panels/' . $this->mod . '/lists_sort');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists_sort" /><?
        */
	}	
	public function set_cat_from_page($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat'] = '1';
		
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat_from_main_menu($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_main_menu'] = '1';
		
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat_from_top_menu($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_top_menu'] = '1';
		
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat_from_footer_menu($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0';
		$_SESSION[$this->mod.'_group'] = $id; 
		$_SESSION[$this->mod.'_group_page'] = '0'; 
		$_SESSION[$this->mod.'_set_cat_footer_menu'] = '1';
		
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_cat_page($id = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = '0'; 
		$_SESSION[$this->mod.'_group_page'] = $id; 
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_max_rows($a = '5')
	{
        /*
        $_SESSION[$this->mod.'_max_rows'] = $a;
		$_SESSION[$this->mod.'_page_num'] = '0'; 
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_page_num($a = '0')
	{
        /*
        $_SESSION[$this->mod.'_page_num'] = $a; 
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	}	
	public function set_order_by($a = 'id',$b = 'ASC')
	{
        /*
        $_SESSION[$this->mod.'_sort_1'] = $a;
		$_SESSION[$this->mod.'_sort_2'] = $b;
		//redirect('/panels/' . $this->mod . '/lists');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/lists" /><?
        */
	} 	
	public function set_status_show($a = '0')
	{
        /*
        $this->load->model($this->mod_model); 
		
		$d = new stdClass(); 
		$d->status = '1';
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$a,'id');        
		
		$this->load->model('Portal_website_log_model');   
		$this->Portal_website_log_model->add_log('Status Show - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_SHOW');
		  
		//redirect('/panels/' . $this->mod . '/');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/" /><?	
        */	
	}	
	public function set_status_hide($a = '0')
	{ 
        /*
        $this->load->model($this->mod_model); 
		
		$d = new stdClass(); 
		$d->status = '0';
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$a,'id');        
		
		$this->load->model('Portal_website_log_model');   
		$this->Portal_website_log_model->add_log('Status Hide - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_HIDE');
		 
		//redirect('/panels/' . $this->mod . '/');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/" /><?	
        */		
	}	
	public function set_sort()
	{  
        /*
        $this->load->model($this->mod_model); 
		
		while($each = each($_POST['sort']))
		{ 
			$d = new stdClass(); 
			$d->sort = $each[1];   
			$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$each[0],'id');        
		} 
		
		$this->load->model('Portal_website_log_model');   
		$this->Portal_website_log_model->add_log('Update Sort - '.$this->mod_title.'',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_SORT');
		 
		//redirect('/panels/' . $this->mod . '/');
        ?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panels/<?= $this->mod ?>/" /><?	
        */	
	}
}
