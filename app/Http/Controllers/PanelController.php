<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
 
class PanelController extends Controller
{ 
    public function login()
    {        
        if(isset($_SESSION['portal_login']) && $_SESSION['portal_login'] == 1)
        {
            return view('panel.login');
        }
        else
        {
            return view('panel.login');
        } 
    }

    public function login_check(Request $request)
    {   
        $CustomHelper = new \App\CustomHelper;
        
        $new_login_pass = false;
		$new_login_type = "";
		$new_login_id = "";
		$this_id = 0;
		 
        $u = $request->input('u');
        $p = $request->input('p');
        
        $q = "SELECT * FROM tbl_portal_website WHERE username = ? AND password = ?"; 
        $v = $u."|".md5($p);
        $res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_login_check'),$q,$v); 
		 
        if(trim($res) == '[]')
        {
            //$this->Portal_website_log_model->add_log('Login is invalid (' . $u . ')',$u,'','LOGIN_FAIL');
            
            ?><script>alert('Login Invalid.');window.history.back();</script><?php
            exit;
        }
 
        $obj_portal_website = json_decode($res);
        
        if(isset($obj_portal_website[0]->id) && $obj_portal_website[0]->id != '')
        {
            $new_login_id = $obj_portal_website[0]->id;
			$this_id = $new_login_id;
			  
			$_SESSION['panel_login'] = 1;
			$_SESSION['panel_id'] = $obj_portal_website[0]->id; 
			$_SESSION['panel_username'] = $obj_portal_website[0]->username;	 
			$_SESSION['panel_web_code'] = $obj_portal_website[0]->web_code;
			$_SESSION['panel_web_name'] = $obj_portal_website[0]->web_name;  
			$_SESSION['panel_web_name_en'] = $obj_portal_website[0]->web_name_en;  
			$_SESSION['panel_web_desc'] = $obj_portal_website[0]->web_desc;  
			$_SESSION['panel_web_url'] = $obj_portal_website[0]->web_url;  
			$_SESSION['panel_web_disk'] = $obj_portal_website[0]->web_disk;  
			$_SESSION['panel_web_type'] = $obj_portal_website[0]->web_type;  
			$_SESSION['panel_web_package'] = $obj_portal_website[0]->web_package;  
			$_SESSION['panel_profile_name'] = $obj_portal_website[0]->profile_name;  
			$_SESSION['panel_profile_lastname'] = $obj_portal_website[0]->profile_lastname;  
			$_SESSION['panel_profile_email'] = $obj_portal_website[0]->profile_email;  
			$_SESSION['panel_profile_mobile'] = $obj_portal_website[0]->profile_mobile;  
			$_SESSION['panel_profile_idcard'] = $obj_portal_website[0]->profile_idcard;  
			$_SESSION['panel_login_count'] = $obj_portal_website[0]->login_count;  
			$_SESSION['panel_last_login'] = $obj_portal_website[0]->last_login;  
			$_SESSION['panel_session_id'] = $obj_portal_website[0]->session_id;
			  
			//$this->Portal_website_log_model->add_log('Login Success ( ' . $_SESSION['panel_username'] . ' )',$_SESSION['panel_username'],$_SESSION['panel_id'],'LOGIN_PASS');
		  
			/*
			$d = new stdClass(); 
			$d->last_login = date('U'); 
			$d->login_count = $_SESSION['panel_login_count']+1;
			$d->session_id = session_id(); 
			$this->Portal_website_model->update_data($d,$_SESSION['panel_id'],'id');    
			*/
			 
			/*
			$this->load->model('Portal_website_style_model'); 
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']);   
			$q = $this->Portal_website_style_model->select_data($d);  
			 
			$row = $q->result(); 
			  
			$_SESSION['panel_style_logo_type'] = $row[0]->logo_type;
			$_SESSION['panel_style_logo_img1'] = $row[0]->logo_img1;
			$_SESSION['panel_style_logo_url'] = $row[0]->logo_url;
			$_SESSION['panel_style_logo_lastupdate'] = $row[0]->logo_lastupdate;
			$_SESSION['panel_style_template_id'] = $row[0]->template_id;
			$_SESSION['panel_style_template_lastupdate'] = $row[0]->template_lastupdate;
			$_SESSION['panel_style_info_title'] = $row[0]->info_title;
			$_SESSION['panel_style_info_keyword'] = $row[0]->info_keyword;
			$_SESSION['panel_style_info_description'] = $row[0]->info_description;
			$_SESSION['panel_style_info_lastupdate'] = $row[0]->info_lastupdate;
			$_SESSION['panel_style_search_option'] = $row[0]->search_option;
			$_SESSION['panel_style_search_id'] = $row[0]->search_id;
			$_SESSION['panel_style_search_layout'] = $row[0]->search_layout; 
			$_SESSION['panel_style_lang_option'] = $row[0]->lang_option;
			$_SESSION['panel_style_lang_id'] = $row[0]->lang_id;
			$_SESSION['panel_style_lang_layout'] = $row[0]->lang_layout; 
			$_SESSION['panel_style_social_option'] = $row[0]->social_option;
			$_SESSION['panel_style_social_id'] = $row[0]->social_id;
			$_SESSION['panel_style_social_layout'] = $row[0]->social_layout; 
			$_SESSION['panel_style_social_fb'] = $row[0]->social_fb;
			$_SESSION['panel_style_social_tw'] = $row[0]->social_tw;
			$_SESSION['panel_style_social_ins'] = $row[0]->social_ins;
			$_SESSION['panel_style_social_yt'] = $row[0]->social_yt; 
			$_SESSION['panel_style_copyright_option'] = $row[0]->copyright_option;
			$_SESSION['panel_style_copyright_info'] = $row[0]->copyright_info;  
			$_SESSION['panel_style_copyright_info_en'] = $row[0]->copyright_info_en;  
			$_SESSION['panel_style_lang_start'] = $row[0]->lang_start;
			$_SESSION['panel_style_block_ip'] = $row[0]->block_ip;
			$_SESSION['panel_style_close_status'] = $row[0]->close_status;
			$_SESSION['panel_style_close_type'] = $row[0]->close_type;
			$_SESSION['panel_style_close_info'] = $row[0]->close_info;
			$_SESSION['panel_style_close_redirect'] = $row[0]->close_redirect;
			$_SESSION['panel_style_css_info'] = $row[0]->css_info;
			$_SESSION['panel_style_html_head_info'] = $row[0]->html_head_info;
			$_SESSION['panel_style_html_body_info'] = $row[0]->html_body_info;
			$_SESSION['panel_style_html_foot_info'] = $row[0]->html_foot_info;  
			$_SESSION['panel_style_call_center_info'] = $row[0]->call_center_info; 
			$_SESSION['panel_style_slogan_1'] = $row[0]->slogan_1; 
			$_SESSION['panel_style_slogan_2'] = $row[0]->slogan_2;  
			$_SESSION['panel_style_slogan_1_en'] = $row[0]->slogan_1_en; 
			$_SESSION['panel_style_slogan_2_en'] = $row[0]->slogan_2_en;  
			$_SESSION['panel_style_contact_text_1'] = $row[0]->contact_text_1; 
			$_SESSION['panel_style_contact_text_2'] = $row[0]->contact_text_2; 
			$_SESSION['panel_style_contact_text_3'] = $row[0]->contact_text_3; 
			$_SESSION['panel_style_contact_text_4'] = $row[0]->contact_text_4; 
			   
			$this->load->model('Portal_website_all_bg_model'); 
			$d = new stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']);   
			$q = $this->Portal_website_all_bg_model->select_data($d);  
			 	
			//redirect('/panel/login');
			?><meta http-equiv="refresh" content="0;URL=http://localhost/bangkok.go.th.portal/panel/login" /><?
			*/

			return view('panel.login');
		}
		

        exit;
    }
}
