<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/question/
LOCATION : /application/controllers/panels/question.php
*/
 
class Question
{  
	var $mod = 'question'; 
	var $mod_model = 'Portal_website_question_model'; 
	var $mod_title = 'Questionnaire'; 
	
	var $mod_cat_mod = 'question_cat'; 
	var $mod_cat_model = 'Portal_website_question_cat_model'; 
	var $mod_cat_field = 'cat_id'; 
	var $mod_cat_order_by = 'title ASC'; 
	var $mod_cat_dropdown_title = 'question'; 
	var $config_dropdown_cat_file = 'manage.include.list_cat_dropdown';
	  
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('no.','name','last_create');
	var $config_list_column_width = array('70','','100');
	var $config_list_column_name = array('id','title','last_create'); 
	
	var $config_submenu_title = array('list','add');
	var $config_submenu_mod = array('lists','add');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,14,2); btn2stageFocus(0,1);';
	
	var $config_use_add = true;
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	var $config_use_status= true;
	
	var $config_sort1 = 'sort'; 
	var $config_sort2 = 'asc';
	 
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
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,14,3); btn2stageFocus(0,2);'; 
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
		$d->input_type = $this->input->post('input_type', TRUE);  
		$d->input_detail = $this->input->post('input_detail', TRUE);     
		$d->last_create = date('U');  
		$d->last_update = date('U');    
		$d->sort = $sort;
		$d->status = '1';
		 
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
			$data['edit_cat_id'] = $row[0]->cat_id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_title'] = $row[0]->title;
			$data['edit_en_title'] = $row[0]->en_title; 
			$data['edit_input_type'] = $row[0]->input_type;
			$data['edit_input_detail'] = $row[0]->input_detail; 
			 
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,14,2); btn2stageFocus(0,1);'; 
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
		$d->input_type = $this->input->post('input_type', TRUE);  
		$d->input_detail = $this->input->post('input_detail', TRUE);   
		$d->last_update = date('U');   
		      
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>