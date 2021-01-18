<?php  
namespace App\Conf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Cache;

 
/*
URL PATH : /panels/logo/
LOCATION : /application/controllers/panels/logo.php
*/
 
class Logo
{  
	var $mod = 'logo'; 
	var $mod_model = 'Portal_website_style_model'; 
	var $mod_title = 'Logo';  
	var $mod_cat_field = ''; 
	var $config_search_field = array('');
	 
	public function index()
	{ 
		$this->include_header(); 
		 
		$data['this_cat'] = $this->lang->line('logo');
		$data['this_page'] = $this->lang->line('edit');
		$data['title'] = $data['this_page'] . ' : ' . $data['this_cat'] . ' - ' . $this->lang->line('bangkok_portal');
		  
		$data['config_mod'] = $this->mod;       
		   
		$this->load->view('panel/logo/index', $data); 
	} 
	
	public function url_submit()
	{ 
		$this->include_header(); 
		 
		$url = $this->input->post('url', TRUE);
		 
		$this->load->model('Portal_website_style_model'); 
		
		$d = new stdClass(); 
		$d->logo_type = '2';
		$d->logo_img1 = $url;
		$d->logo_url = $url;
		$d->logo_lastupdate = date('U');    
		$this->Portal_website_style_model->update_data($d,$_SESSION['panel_id'],'web_id');  
			
		$this->load->model('Portal_website_log_model');   
		$this->Portal_website_log_model->add_log('Change Logo',$_SESSION['panel_username'],$_SESSION['panel_id'],strtoupper($this->mod).'_EDIT');
		 
		$_SESSION['panel_style_logo_type'] = '2';
		$_SESSION['panel_style_logo_img1'] = $url;
		$_SESSION['panel_style_logo_url'] = $url;
		$_SESSION['panel_style_logo_lastupdate'] = date('U');    
		
		//redirect('/panels/' . $this->mod . '/index'); 
		?>
		<meta http-equiv="refresh" content="0;URL=<?php echo 'http://localhost/bangkok.go.th.portal/panels/' . $this->mod . '/index' ?>" />
		<?php
		exit;	
	}
}
?>