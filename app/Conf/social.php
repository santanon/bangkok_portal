<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/social/
LOCATION : /application/controllers/panels/social.php
*/
 
class Social
{  
	var $mod = 'social'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Social'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('');
	var $config_list_column_width = array('');
	var $config_list_column_name = array(''); 
	
	var $config_submenu_title = array('edit');
	var $config_submenu_mod = array('edit');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,7); btn2stageFocus(0,1);';
	
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	
	public function lists($v1 = '0')
	{ 
		//redirect('/panels/'.$this->mod.'/edit');  
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/'.$this->mod.'/edit' ?>" />
		<?php
		exit;
	}
	 
	public function edit()
	{ 
		$this->include_header(); 
		 
		$this->load->model($this->mod_model); 
		
		$d = new stdClass();  
		$d->where = array('id >' => 0,'web_id' => $_SESSION['panel_id']);
		$q = $this->{$this->mod_model}->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_social_option'] = $row[0]->social_option;
			$data['edit_social_id'] = $row[0]->social_id;
			$data['edit_social_layout'] = $row[0]->social_layout; 
			$data['edit_social_fb'] = $row[0]->social_fb;
			$data['edit_social_tw'] = $row[0]->social_tw;
			$data['edit_social_ins'] = $row[0]->social_ins;
			$data['edit_social_yt'] = $row[0]->social_yt; 
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										   
			$data['config_footer_js'] = 'mainmenuFocus(1,1,7); btn2stageFocus(0,1);';        
			  
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
		 
		$d = new stdClass();  
		$d->social_option = $this->input->post('social_option', TRUE);
		$d->social_layout = $this->input->post('social_layout', TRUE);
		//$d->social_id = $this->input->post('social_id', TRUE);   
		$d->social_fb = $this->input->post('social_fb', TRUE); 
		$d->social_tw = $this->input->post('social_tw', TRUE); 
		$d->social_ins = $this->input->post('social_ins', TRUE); 
		$d->social_yt = $this->input->post('social_yt', TRUE);   
		
		$this->{$this->mod_model}->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/' . $this->mod . '/');
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/' ?>" />
        <?php  } 
}
?>