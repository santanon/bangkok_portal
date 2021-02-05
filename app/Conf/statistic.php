<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;
 
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
		?> 
        <meta http-equiv="refresh" content="0;URL=<?php echo  'http://127.0.0.1:8000/manage-admin/view?m='.$this->mod.'' ?>" />
		<?php
		exit; 
	}
	 
	public function view()
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		  
		  
		$data['title'] = $TextLanguage->lang('title_main');  
		
		 
		 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
		$r = json_decode($res);
		
		 
		$main_str = ''; 
		foreach ($r as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>';
			 
		 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '0' ORDER BY sort ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
			$r_sub1 = json_decode($res);
			
			
			 
			foreach ($r_sub1 as $row_cat_sub1)
			{ 
				$main_str = $main_str . '<tr><td style="padding-left:40px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub1->title . ' ( ' . $row_cat_sub1->click_view . ' )</span></td></tr>';
				 
				
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub1->id."' ORDER BY sort ASC";	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
				$r_sub2 = json_decode($res);
				
				
				
				foreach ($r_sub2 as $row_cat_sub2)
				{	  
					$main_str = $main_str . '<tr><td style="padding-left:80px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub2->title . ' ( ' . $row_cat_sub2->click_view . ' )</span></td></tr>';
					 
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub2->id."' ORDER BY sort ASC";	 	
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
					$r_sub3 = json_decode($res);
					
					
					foreach ($r_sub3 as $row_cat_sub3)
					{	
						$main_str = $main_str . '<tr><td style="padding-left:120px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub3->title . ' ( ' . $row_cat_sub3->click_view . ' )</span></td></tr>'; 
						 
						$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub3->id."' ORDER BY sort ASC";	 	
						$v = $_SESSION['panel_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
						$r_sub4 = json_decode($res);
						 
						foreach ($r_sub4 as $row_cat_sub4)
						{
							$main_str = $main_str . '<tr><td style="padding-left:160px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub4->title . ' ( ' . $row_cat_sub4->click_view . ' )</span></td></tr>';  
							 
							$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub4->id."' ORDER BY sort ASC";	 	
							$v = $_SESSION['panel_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
							$r_sub5 = json_decode($res);
							
							
							foreach ($r_sub5 as $row_cat_sub5)
							{
								$main_str = $main_str . '<tr><td style="padding-left:200px;height:25px;">&nbsp; - <span style="color:#666666">' . $row_cat_sub5->title . ' ( ' . $row_cat_sub5->click_view . ' )</span></td></tr>';   
							}
						}
					}
				}
			}  
		} 
		$data['main_str'] = $main_str;
		
		
		 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_top_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_top_menu_page_model')),$q,$v);
		$r = json_decode($res);
		
		
		 
		$main_str = ''; 
		foreach ($r as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>'; 
		} 
		$data['main_str_top'] = $main_str;
		
		
		
		 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_footer_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_footer_menu_page_model')),$q,$v);
		$r = json_decode($res);
		
		
		
		$main_str = ''; 
		foreach ($r as $row_cat)
		{    
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <span style="color:#666666">' . $row_cat->title . ' ( ' . $row_cat->click_view . ' )</span></td></tr>'; 
		} 
		$data['main_str_footer'] = $main_str;
		
		
		
		
		$data['this_cat'] = $TextLanguage->lang(@$this->mod);
		$data['this_page'] = $TextLanguage->lang('view');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
		 
		$data['config_mod'] = $this->mod; 
		
		$data['config_submenu_title'] = $this->config_submenu_title;
		$data['config_submenu_mod'] = $this->config_submenu_mod;   
		
		$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');
									   
		$data['config_footer_js'] = 'mainmenuFocus(1,1,8); btn2stageFocus(0,1);';
		  
		$this->load->view('panel/'.$this->mod.'/view', $data);  
	}    
	
	public function edit($v1 = '0')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_style_model')." WHERE web_id = '".$_SESSION['panel_id']."'";	 	
		$v = $v1;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),$q,$v);
		$q = json_decode($res); 
		  
		if(count($q) > 0)
		{  
			$row = $q;   
		 
			$data['edit_id'] = $row[0]->id;
			$data['edit_web_id'] = $row[0]->web_id;
			$data['edit_search_option'] = $row[0]->search_option;
			$data['edit_search_layout'] = $row[0]->search_layout;
			$data['edit_search_id'] = $row[0]->search_id;
			     
			$data['this_cat'] = $TextLanguage->lang(@$this->mod);
			$data['this_page'] = $TextLanguage->lang('edit');
			$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $TextLanguage->lang('bangkok_portal');    
			 
			$data['config_mod'] = $this->mod; 
			
			$data['config_submenu_title'] = $this->config_submenu_title;
			$data['config_submenu_mod'] = $this->config_submenu_mod;   
			
			$data['config_header_info'] = $TextLanguage->lang('help_'.$this->mod.'_edit');
										        
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
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		 
		   
		 
		$d = new \stdClass();  
		$d->search_option = $CustomHelper->input_post('search_option', TRUE);
		$d->search_layout = $CustomHelper->input_post('search_layout', TRUE);
		$d->search_id = $CustomHelper->input_post('search_id', TRUE);  
		
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_style_model')." SET ".$this_qr." WHERE id = '".$CustomHelper->input_post('id', TRUE)."' AND web_id = '".$_SESSION['panel_id']."'",''); 
		    
		$CustomHelper->add_log(''.$this->mod_title.' - Edit ('.$CustomHelper->input_post('title', TRUE).')',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');  
		 
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://127.0.0.1:8000/manage-admin/edit?m='.$this->mod.'' ?>" />
		<?php
		exit;
	} 
}
?>