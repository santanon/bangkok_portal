<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/statistic/
LOCATION : /application/controllers/panels/statistic.php
*/
 
class Statistic
{  
	var $mod = 'statistic'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Statistic'; 
	var $mod_cat_field = ''; 
	var $config_search_field = array('title'); 
	
	var $config_list_column_title = array('');
	var $config_list_column_width = array('');
	var $config_list_column_name = array(''); 
	
	var $config_submenu_title = array('view','edit');
	var $config_submenu_mod = array('view','edit');
	
	var $config_list_header_info = '';
									   
	var $config_list_footer_js = 'mainmenuFocus(1,1,8); btn2stageFocus(0,1);';
	 
	var $config_use_edit = true;
	var $config_use_delete = true;
	var $config_use_sort = true;
	
	public function lists($v1 = '0')
	{ 
		//redirect('/panels/'.$this->mod.'/view');
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/'.$this->mod.'/view' ?>" />
		<?php
		exit; 
	}
	 
	public function view()
	{ 
		$this->include_header(); 
		  
		$data['title'] = $this->lang->line('title_main');  
		
		$this->load->model('Portal_website_main_menu_page_model');
		$this->load->model('Portal_website_page_model'); 
		$this->load->model('Portal_website_top_menu_page_model');
		$this->load->model('Portal_website_footer_menu_page_model');
		
		$d = new stdClass(); 
		$d->orderby = 'sort ASC';
		$d->where = array('web_id'=>$_SESSION['panel_id']);  
		$r = $this->Portal_website_main_menu_page_model->select_data($d);   
		$main_str = ''; 
		foreach ($r->result() as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>';
			 
			$d = new stdClass(); 
			$d->orderby = 'sort ASC';
			$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>'0'); 
			$r_sub1 = $this->Portal_website_page_model->select_data($d); 
			 
			foreach ($r_sub1->result() as $row_cat_sub1)
			{ 
				$main_str = $main_str . '<tr><td style="padding-left:40px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub1->title . ' ( ' . $row_cat_sub1->click_view . ' )</span></td></tr>';
				 
				$d = new stdClass(); 
				$d->orderby = 'sort ASC';
				$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub1->id); 
				$r_sub2 = $this->Portal_website_page_model->select_data($d); 
				
				foreach ($r_sub2->result() as $row_cat_sub2)
				{	  
					$main_str = $main_str . '<tr><td style="padding-left:80px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub2->title . ' ( ' . $row_cat_sub2->click_view . ' )</span></td></tr>';
					
					$d = new stdClass(); 
					$d->orderby = 'sort ASC';
					$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub2->id); 
					$r_sub3 = $this->Portal_website_page_model->select_data($d); 
					
					foreach ($r_sub3->result() as $row_cat_sub3)
					{	
						$main_str = $main_str . '<tr><td style="padding-left:120px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub3->title . ' ( ' . $row_cat_sub3->click_view . ' )</span></td></tr>'; 
						
						$d = new stdClass(); 
						$d->orderby = 'sort ASC';
						$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub3->id); 
						$r_sub4 = $this->Portal_website_page_model->select_data($d); 
						
						foreach ($r_sub4->result() as $row_cat_sub4)
						{
							$main_str = $main_str . '<tr><td style="padding-left:160px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub4->title . ' ( ' . $row_cat_sub4->click_view . ' )</span></td></tr>';  
							
							$d = new stdClass(); 
							$d->orderby = 'sort ASC';
							$d->where = array('web_id'=>$_SESSION['panel_id'],'cat_id'=>$row_cat->id,'page_id'=>$row_cat_sub4->id); 
							$r_sub5 = $this->Portal_website_page_model->select_data($d); 
							
							foreach ($r_sub5->result() as $row_cat_sub5)
							{
								$main_str = $main_str . '<tr><td style="padding-left:200px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub5->title . ' ( ' . $row_cat_sub5->click_view . ' )</span></td></tr>';   
							}
						}
					}
				}
			}  
		} 
		$data['main_str'] = $main_str;
		
		
		
		$d = new stdClass(); 
		$d->orderby = 'sort ASC';
		$d->where = array('web_id'=>$_SESSION['panel_id']);  
		$r = $this->Portal_website_top_menu_page_model->select_data($d);   
		$main_str = ''; 
		foreach ($r->result() as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>'; 
		} 
		$data['main_str_top'] = $main_str;
		
		
		
		$d = new stdClass(); 
		$d->orderby = 'sort ASC';
		$d->where = array('web_id'=>$_SESSION['panel_id']);  
		$r = $this->Portal_website_footer_menu_page_model->select_data($d);   
		$main_str = ''; 
		foreach ($r->result() as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>'; 
		} 
		$data['main_str_footer'] = $main_str;
		
		
		
		
		$data['this_cat'] = $this->lang->line($this->mod);
		$data['this_page'] = $this->lang->line('view');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
		 
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,1,8); btn2stageFocus(0,1);';
		  
		$this->load->view('panel/'.$this->mod.'/view', $data);  
	}    
	
	public function edit()
	{ 
		$this->include_header(); 
		 
		$this->load->model('Portal_website_style_model'); 
		
		$d = new stdClass();  
		$d->where = array('id >' => 0,'web_id' => $_SESSION['panel_id']);
		$q = $this->Portal_website_style_model->select_data($d);  
		 
		if($q->num_rows == 1)
		{  
			$row = $q->result();  
			
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_search_option'] = $row[0]->search_option;
			$data['edit_search_layout'] = $row[0]->search_layout;
			$data['edit_search_id'] = $row[0]->search_id;
			     
			$data['this_cat'] = $this->lang->line($this->mod);
			$data['this_page'] = $this->lang->line('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $this->lang->line('help_'.$this->mod.'_edit');
										        
			$data['config_footer_js'] = 'mainmenuFocus(1,1,8); btn2stageFocus(0,2);';   
			  
			$this->load->view('panel/ga/edit', $data); 
		}
		else
		{
			exit;	
		}  
	}	
	
	public function edit_submit()
	{ 
		$this->include_header(); 
		  
		$this->load->model('Portal_website_style_model');  
		 
		$d = new stdClass();  
		$d->search_option = $this->input->post('search_option', TRUE);
		$d->search_layout = $this->input->post('search_layout', TRUE);
		$d->search_id = $this->input->post('search_id', TRUE);  
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id',$this->input->post('id', TRUE),'id');    
 	
		$this->load->model('Portal_website_log_model'); 
		$this->Portal_website_log_model->add_log('' . $this->mod_title . ' - Edit (' . $this->input->post('title', TRUE) . ')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		
		//redirect('/panels/'.$this->mod.'/edit');  
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/'.$this->mod.'/edit' ?>" />
		<?php
		exit;
	} 
}
?>