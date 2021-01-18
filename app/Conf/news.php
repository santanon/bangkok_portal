<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/news/
LOCATION : /application/controllers/panels/news.php
*/
 
class News
{  
	var $mod = 'news'; 
	var $mod_model = 'Portal_website_news_model'; 
	var $mod_title = 'News'; 
	
	var $mod_cat_mod = 'news_cat'; 
	var $mod_cat_model = 'Portal_website_news_cat_model'; 
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
									   
	var $config_list_footer_js = 'mainmenuFocus(1,9,2); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	
	var $config_sort1 = 'id'; 
	var $config_sort2 = 'desc';
	 
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
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,9,3); btn2stageFocus(0,2);'; 
		$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title); 
		
		if($this->mod_cat_model <> '')
		{
			$this->load->model($this->mod_cat_model);
			
			$d = new stdClass();  
			$d->orderby = $this->mod_cat_order_by;
			$d->where = array('web_id'=>$_SESSION['panel_id']);
			$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
			$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			
			if($data['list_cat']->num_rows == '0')
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $this->lang->line('please_create_group') ?>');
				window.location = '<?php echo base_url() . 'panels/' . $this->mod . '_cat' ?>';
				</script>
				<?php
				exit;
			}
		}          
		  
		$this->load->view('panel/'.$this->mod.'/add', $data); 
	}
	
	public function add_submit()
	{ 
		$this->include_header();  
		$this->load->model($this->mod_model);  
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE); 
		 
		$d = new stdClass();  
		$d->where = array('web_id' => $_SESSION['panel_id'],'cat_id' => $_SESSION[$this->mod.'_group']); 
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
		$d->cat_id = $this->input->post('cat_id', TRUE);
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));
		  
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($this->input->post('en_info', FALSE));  
		/*
		$d->info = $this->input->post('info', FALSE);  
		$d->en_info = $this->input->post('en_info', FALSE);  
		*/
		$d->img1 = $this->input->post('img1', TRUE);    
		
		$date_news_1 = 0;
		
		if(strlen($this->input->post('date_news', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_news', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news = $date_news_1;
		  
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1'; 
		
		$date_1 = 0;
		
		if(strlen($this->input->post('date_start', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_start', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$date_2 = 0;
		
		if(strlen($this->input->post('date_end', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_end', TRUE));
			$end_d = $arr[0];
			$end_m = $arr[1];
			$end_y = $arr[2];
			
			$date_2 = mktime(23,59,59,$end_m,$end_d,$end_y);
		} 
		
		$d->date_start = $date_1;
		$d->date_end = $date_2;
		$d->date_set = $this->input->post('date_set', TRUE);
		
		$d->can_review = $this->input->post('can_review', TRUE);
		
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
			$data['edit_cat_id'] = $row[0]->cat_id;
			$data['edit_title'] = $row[0]->title;
			$data['edit_en_title'] = $row[0]->en_title; 
			$data['edit_info'] = $row[0]->info;
			$data['edit_en_info'] = $row[0]->en_info;
			$data['edit_img1'] = $row[0]->img1;
			$data['edit_date_news'] = $row[0]->date_news; 
			
			$data['edit_date_start'] = $row[0]->date_start; 
			$data['edit_date_end'] = $row[0]->date_end; 
			$data['edit_date_set'] = $row[0]->date_set; 
			
			$data['edit_can_review'] = $row[0]->can_review;  
			    
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,9,2); btn2stageFocus(0,1);'; 
			$data['config_dropdown_title'] = $this->lang->line($this->mod_cat_dropdown_title);
			
			if($this->mod_cat_model <> '')
			{
				$this->load->model($this->mod_cat_model);
				
				$d = new stdClass();  
				$d->orderby = $this->mod_cat_order_by;
				$d->where = array('web_id'=>$_SESSION['panel_id']);
				$data['list_cat'] = $this->{$this->mod_cat_model}->select_data($d);  
				$data['this_cat_list'] = @$_SESSION[$this->mod.'_group'];
			}           
			  
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
		$_SESSION[$this->mod.'_group'] = $this->input->post('cat_id', TRUE); 
		 
		$d = new stdClass();  
		$d->cat_id = $this->input->post('cat_id', TRUE); 
		$d->title = htmlspecialchars($this->input->post('title', TRUE));
		$d->en_title = htmlspecialchars($this->input->post('en_title', TRUE));  
		/*
		$d->info = $this->input->post('info', FALSE);  
		$d->en_info = $this->input->post('en_info', FALSE);
		*/
		$d->info = htmlspecialchars_decode($this->input->post('info', FALSE));  
		$d->en_info = htmlspecialchars_decode($this->input->post('en_info', FALSE));  
		
		$d->img1 = $this->input->post('img1', TRUE);
		
		if(@$_POST['img1_delete'] == '1')
		{
			$d->img1 = '';
		}
		   
		$d->last_update = date('U');  
		 
		$date_news_1 = 0;
		
		if(strlen($this->input->post('date_news', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_news', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_news_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$d->date_news = $date_news_1;
		 
		
		$date_1 = 0;
		
		if(strlen($this->input->post('date_start', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_start', TRUE));
			$start_d = $arr[0];
			$start_m = $arr[1];
			$start_y = $arr[2];	
			
			$date_1 = mktime(0,0,0,$start_m,$start_d,$start_y);
		}
		
		$date_2 = 0;
		
		if(strlen($this->input->post('date_end', TRUE)) > 3)
		{
			$arr = explode('-',$this->input->post('date_end', TRUE));
			$end_d = $arr[0];
			$end_m = $arr[1];
			$end_y = $arr[2];
			
			$date_2 = mktime(23,59,59,$end_m,$end_d,$end_y);
		} 
		
		$d->date_start = $date_1;
		$d->date_end = $date_2;
		$d->date_set = $this->input->post('date_set', TRUE);
		$d->can_review = $this->input->post('can_review', TRUE);
		     
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>