<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
 
class PanelController extends Controller
{   
	var $mod = 'ballsite'; 
	var $theme = 'theme_1';
	
	public function include_header()
    {      
		$CustomHelper = new \App\CustomHelper;
		
		if(isset($_SESSION['member_login']) && $_SESSION['member_login'] == 1)
		{
			$_SESSION['login_'.$this->mod.'_pass'] = '1';
			$_SESSION['login_'.$this->mod.'_id'] = $_SESSION['member_id']; 
			$_SESSION['login_'.$this->mod.'_title'] = $_SESSION['member_name']; 
			$_SESSION['login_'.$this->mod.'_lastname'] = $_SESSION['member_lastname']; 
			$_SESSION['login_'.$this->mod.'_username'] = $_SESSION['member_user']; 
			$_SESSION['login_'.$this->mod.'_email'] = $_SESSION['member_email']; 
			$_SESSION['login_'.$this->mod.'_gender'] = $_SESSION['member_sex']; 
			$_SESSION['login_'.$this->mod.'_birthday'] = $_SESSION['member_birthday']; 
			$_SESSION['login_'.$this->mod.'_tel'] = $_SESSION['member_tel']; 
			$_SESSION['login_'.$this->mod.'_address'] = $_SESSION['member_addr']; 
			$_SESSION['login_'.$this->mod.'_zip_code'] = $_SESSION['member_postal']; 
			$_SESSION['login_'.$this->mod.'_province'] = $_SESSION['member_province_id']; 
			$_SESSION['login_'.$this->mod.'_idcard'] = $_SESSION['member_idcard']; 
			$_SESSION['login_'.$this->mod.'_img1'] = $_SESSION['member_img']; 	
		}
		else
		{
			$_SESSION['login_'.$this->mod.'_pass'] = '';
			$_SESSION['login_'.$this->mod.'_id'] = '';
			$_SESSION['login_'.$this->mod.'_title'] = '';
			$_SESSION['login_'.$this->mod.'_lastname'] = '';
			$_SESSION['login_'.$this->mod.'_username'] = '';
			$_SESSION['login_'.$this->mod.'_email'] = '';
			$_SESSION['login_'.$this->mod.'_gender'] = '';
			$_SESSION['login_'.$this->mod.'_birthday'] = '';
			$_SESSION['login_'.$this->mod.'_tel'] = '';
			$_SESSION['login_'.$this->mod.'_address'] = '';
			$_SESSION['login_'.$this->mod.'_zip_code'] = '';
			$_SESSION['login_'.$this->mod.'_province'] = '';
			$_SESSION['login_'.$this->mod.'_idcard'] = '';
			$_SESSION['login_'.$this->mod.'_img1'] = '';
		} 
		   
		$q = "SELECT * FROM tbl_portal_website WHERE web_url = ?";
        $v = $this->mod;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website'),$q,$v);
		 
		if(trim($res) == '')
        {  
            ?><script>alert('ไม่สามารถเชื่อมต่อ Service : Login ได้ \n\n<?php echo $CustomHelper->API_URL('api_login_check') ?>');</script><?php
            exit;
		}
		if(trim($res) == '[]')
        {  
            ?><script>alert('ไม่พบข้อมูล');</script><?php
            exit;
        }
		  
		$obj_portal_website = json_decode($res); 
		$web_id = $obj_portal_website[0]->id; 

		$_SESSION['portal_website_' . $this->mod . '_id'] = $obj_portal_website[0]->id;
		$_SESSION['portal_website_' . $this->mod . '_username'] = $obj_portal_website[0]->username;
		$_SESSION['portal_website_' . $this->mod . '_web_code'] = $obj_portal_website[0]->web_code;
		$_SESSION['portal_website_' . $this->mod . '_web_name_th'] = $obj_portal_website[0]->web_name;
		$_SESSION['portal_website_' . $this->mod . '_web_name_en'] = $obj_portal_website[0]->web_name_en;
		$_SESSION['portal_website_' . $this->mod . '_web_desc'] = $obj_portal_website[0]->web_desc;
		$_SESSION['portal_website_' . $this->mod . '_web_url'] = $obj_portal_website[0]->web_url;
		$_SESSION['portal_website_' . $this->mod . '_web_disk'] = $obj_portal_website[0]->web_disk;
		$_SESSION['portal_website_' . $this->mod . '_web_disk_use'] = $obj_portal_website[0]->web_disk_use;
		$_SESSION['portal_website_' . $this->mod . '_web_type'] = $obj_portal_website[0]->web_type;
		$_SESSION['portal_website_' . $this->mod . '_web_package'] = $obj_portal_website[0]->web_package;
		$_SESSION['portal_website_' . $this->mod . '_profile_name'] = $obj_portal_website[0]->profile_name;
		$_SESSION['portal_website_' . $this->mod . '_profile_lastname'] = $obj_portal_website[0]->profile_lastname;
		$_SESSION['portal_website_' . $this->mod . '_profile_email'] = $obj_portal_website[0]->profile_email;
		$_SESSION['portal_website_' . $this->mod . '_profile_mobile'] = $obj_portal_website[0]->profile_mobile;
		$_SESSION['portal_website_' . $this->mod . '_profile_idcard'] = $obj_portal_website[0]->profile_idcard;
		$_SESSION['portal_website_' . $this->mod . '_register_confirm'] = $obj_portal_website[0]->register_confirm;
		$_SESSION['portal_website_' . $this->mod . '_login_count'] = $obj_portal_website[0]->login_count;
		$_SESSION['portal_website_' . $this->mod . '_login_wrong'] = $obj_portal_website[0]->login_wrong;
		$_SESSION['portal_website_' . $this->mod . '_last_login'] = $obj_portal_website[0]->last_login;
		$_SESSION['portal_website_' . $this->mod . '_last_create'] = $obj_portal_website[0]->last_create;
		$_SESSION['portal_website_' . $this->mod . '_last_update'] = $obj_portal_website[0]->last_update;
		$_SESSION['portal_website_' . $this->mod . '_status'] = $obj_portal_website[0]->status; 
		$_SESSION['portal_website_' . $this->mod . '_session_id'] = $obj_portal_website[0]->session_id;  

		$q = "SELECT * FROM tbl_portal_website_style WHERE web_id = ?";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_style'),$q,$v);
		$obj_portal_website_style = json_decode($res);
		  
		$_SESSION['portal_website_style_' . $this->mod . '_logo_type'] = $obj_portal_website_style[0]->logo_type; 
		$_SESSION['portal_website_style_' . $this->mod . '_logo_img1'] = $obj_portal_website_style[0]->logo_img1; 
		$_SESSION['portal_website_style_' . $this->mod . '_logo_url'] = $obj_portal_website_style[0]->logo_url; 
		$_SESSION['portal_website_style_' . $this->mod . '_template_id'] = $obj_portal_website_style[0]->template_id; 
		$_SESSION['portal_website_style_' . $this->mod . '_info_title'] = $obj_portal_website_style[0]->info_title; 
		$_SESSION['portal_website_style_' . $this->mod . '_info_keyword'] = $obj_portal_website_style[0]->info_keyword; 
		$_SESSION['portal_website_style_' . $this->mod . '_info_description'] = $obj_portal_website_style[0]->info_description; 
		$_SESSION['portal_website_style_' . $this->mod . '_search_option'] = $obj_portal_website_style[0]->search_option; 
		$_SESSION['portal_website_style_' . $this->mod . '_search_id'] = $obj_portal_website_style[0]->search_id; 
		$_SESSION['portal_website_style_' . $this->mod . '_search_layout'] = $obj_portal_website_style[0]->search_layout; 
		$_SESSION['portal_website_style_' . $this->mod . '_lang_option'] = $obj_portal_website_style[0]->lang_option; 
		$_SESSION['portal_website_style_' . $this->mod . '_lang_id'] = $obj_portal_website_style[0]->lang_id; 
		$_SESSION['portal_website_style_' . $this->mod . '_lang_layout'] = $obj_portal_website_style[0]->lang_layout; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_option'] = $obj_portal_website_style[0]->social_option; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_id'] = $obj_portal_website_style[0]->social_id; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_layout'] = $obj_portal_website_style[0]->social_layout; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_fb'] = $obj_portal_website_style[0]->social_fb; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_tw'] = $obj_portal_website_style[0]->social_tw; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_ins'] = $obj_portal_website_style[0]->social_ins; 
		$_SESSION['portal_website_style_' . $this->mod . '_social_yt'] = $obj_portal_website_style[0]->social_yt; 
		$_SESSION['portal_website_style_' . $this->mod . '_copyright_option'] = $obj_portal_website_style[0]->copyright_option; 
		$_SESSION['portal_website_style_' . $this->mod . '_copyright_info'] = $obj_portal_website_style[0]->copyright_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_copyright_info_en'] = $obj_portal_website_style[0]->copyright_info_en; 
		$_SESSION['portal_website_style_' . $this->mod . '_lang_start'] = $obj_portal_website_style[0]->lang_start; 
		$_SESSION['portal_website_style_' . $this->mod . '_block_ip'] = $obj_portal_website_style[0]->block_ip; 
		$_SESSION['portal_website_style_' . $this->mod . '_close_status'] = $obj_portal_website_style[0]->close_status;  
		$_SESSION['portal_website_style_' . $this->mod . '_close_type'] = $obj_portal_website_style[0]->close_type; 
		$_SESSION['portal_website_style_' . $this->mod . '_close_info'] = $obj_portal_website_style[0]->close_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_close_redirect'] = $obj_portal_website_style[0]->close_redirect; 
		$_SESSION['portal_website_style_' . $this->mod . '_css_info'] = $obj_portal_website_style[0]->css_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_html_head_info'] = $obj_portal_website_style[0]->html_head_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_html_body_info'] = $obj_portal_website_style[0]->html_body_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_html_foot_info'] = $obj_portal_website_style[0]->html_foot_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_call_center_info'] = $obj_portal_website_style[0]->call_center_info; 
		$_SESSION['portal_website_style_' . $this->mod . '_slogan_1'] = $obj_portal_website_style[0]->slogan_1;
		$_SESSION['portal_website_style_' . $this->mod . '_slogan_2'] = $obj_portal_website_style[0]->slogan_2;
		$_SESSION['portal_website_style_' . $this->mod . '_slogan_1_en'] = $obj_portal_website_style[0]->slogan_1_en;
		$_SESSION['portal_website_style_' . $this->mod . '_slogan_2_en'] = $obj_portal_website_style[0]->slogan_2_en;
		$_SESSION['portal_website_style_' . $this->mod . '_contact_text_1'] = $obj_portal_website_style[0]->contact_text_1;
		$_SESSION['portal_website_style_' . $this->mod . '_contact_text_2'] = $obj_portal_website_style[0]->contact_text_2;
		$_SESSION['portal_website_style_' . $this->mod . '_contact_text_3'] = $obj_portal_website_style[0]->contact_text_3;
		$_SESSION['portal_website_style_' . $this->mod . '_contact_text_4'] = $obj_portal_website_style[0]->contact_text_4;
		 
		if(empty($_SESSION["portal_lang"]))
		{ 
			if($_SESSION['portal_website_style_' . $this->mod . '_lang_start'] == 'EN')
			{
				$_SESSION["portal_lang"] = "english";	
			}
			else
			{
				$_SESSION["portal_lang"] = "thai";	
			} 
		}	

		$_SESSION['portal_website_' . $this->mod . '_web_name'] = $CustomHelper->L($_SESSION['portal_website_' . $this->mod . '_web_name_th'],$_SESSION['portal_website_' . $this->mod . '_web_name_en']);
		  
		if(empty($_SESSION["portal_lang"]))
		{ 
			if($_SESSION['portal_website_style_' . $this->mod . '_lang_start'] == 'EN')
			{
				$_SESSION["portal_lang"] = "english";	
			}
			else
			{
				$_SESSION["portal_lang"] = "thai";	
			} 
		}	
		$str_check_lang = " AND en_title <> '' ";
		if($_SESSION["portal_lang"] == 'thai')
		{
			$str_check_lang = " AND title <> '' ";
		}

		$q = "SELECT * FROM tbl_portal_website_all_bg WHERE web_id = ?";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_all_bg'),$q,$v);
		$obj_portal_website_all_bg = json_decode($res);
 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news'] = $obj_portal_website_all_bg[0]->mod_news; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_member'] = $obj_portal_website_all_bg[0]->mod_member; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_activities'] = $obj_portal_website_all_bg[0]->mod_activities; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_gallery'] = $obj_portal_website_all_bg[0]->mod_gallery; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_webboard'] = $obj_portal_website_all_bg[0]->mod_webboard; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_poll'] = $obj_portal_website_all_bg[0]->mod_poll; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_question'] = $obj_portal_website_all_bg[0]->mod_question; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_faq'] = $obj_portal_website_all_bg[0]->mod_faq; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_download'] = $obj_portal_website_all_bg[0]->mod_download; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_search'] = $obj_portal_website_all_bg[0]->mod_search; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_sitemap'] = $obj_portal_website_all_bg[0]->mod_sitemap; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_banner'] = $obj_portal_website_all_bg[0]->mod_banner; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_texteditor'] = $obj_portal_website_all_bg[0]->mod_texteditor; 
		$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_contact'] = $obj_portal_website_all_bg[0]->mod_contact; 
 
		/*$q = "SELECT * FROM tbl_portal_website_bg WHERE ( web_id = 1 AND status = '1' AND date_set = '0' ) OR ( web_id = 1 AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "' ) ORDER BY sort ASC LIMIT 0,99";*/

		$q = "SELECT * FROM tbl_portal_website_bg WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_bg'),$q,$v);
		$obj_portal_website_bg = json_decode($res);
		 
		$_SESSION['portal_website_bg_' . $this->mod . '_list'] = $obj_portal_website_bg;
   
		$q = "SELECT * FROM tbl_portal_website_contentbox WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_contentbox'),$q,$v);
		$obj_portal_website_contentbox = json_decode($res);
 
		$_SESSION['portal_website_contentbox_' . $this->mod . '_list'] = $obj_portal_website_contentbox; 
		
		$q = "SELECT * FROM tbl_portal_website_contentbox_cat WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_contentbox_cat'),$q,$v);
		$obj_portal_website_contentbox_cat = json_decode($res);
  
		$_SESSION['portal_website_contentbox_cat_' . $this->mod . '_list'] = $obj_portal_website_contentbox_cat;
		
		$q = "SELECT * FROM tbl_portal_website_footer_menu_page WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_footer_menu_page'),$q,$v);
		$obj_portal_website_footer_menu_page = json_decode($res);
		 
		$_SESSION['portal_website_footer_menu_' . $this->mod . '_list'] = $obj_portal_website_footer_menu_page;	
 
		$q = "SELECT * FROM tbl_portal_website_top_menu_page WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_top_menu_page'),$q,$v);
		$obj_portal_website_top_menu_page = json_decode($res);

		$_SESSION['portal_website_sub_menu_' . $this->mod . '_list'] = $obj_portal_website_top_menu_page;

		$q = "SELECT * FROM tbl_portal_website_main_menu_page WHERE web_id = ? ORDER BY sort ASC LIMIT 0,99";
		$v = $web_id;
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_main_menu_page'),$q,$v);
		$obj_portal_website_main_menu_page = json_decode($res);

		$_SESSION['portal_website_main_menu_' . $this->mod . '_list'] = $obj_portal_website_main_menu_page;

		$str_check_lang = " AND en_title <> '' ";
		if($_SESSION["portal_lang"] == 'thai')
		{
			$str_check_lang = " AND title <> '' ";
		}

		$ball_check_it = 22;
		$show_drop_down = $obj_portal_website_main_menu_page;
 
		foreach($show_drop_down as $r)
		{  
			if($r->page_type == 'group')
			{
				$q = "SELECT * FROM tbl_portal_website_page WHERE ( web_id = ? AND status = '1' AND cat_id = '" . $r->id . "' AND page_id = '0' ) ORDER BY sort ASC LIMIT 0,99";
				$v = $web_id;
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_page'),$q,$v);
				$obj_portal_website_page = json_decode($res);
				 
				$_SESSION['portal_website_page_' . $r->id . '_' . $this->mod . '_list'] = $obj_portal_website_page;
				  
				foreach($_SESSION['portal_website_page_' . $r->id . '_' . $this->mod . '_list'] as $r_sub)
				{  
					$q = "SELECT * FROM tbl_portal_website_page WHERE ( web_id = ? AND cat_id = '" . $r->id . "' AND status = '1' AND page_id = '" . $r_sub->id . "' ) ORDER BY sort ASC LIMIT 0,10";
					$v = $web_id;
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_page'),$q,$v); 
					$obj_portal_website_page_sub = json_decode($res);
					$_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $this->mod . '_list'] = $obj_portal_website_page_sub;   
				} 
			}
		} 
	}

	public function include_lang()
    {
	}

	public function link_helper()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$type = $_GET['type'];
		$field = $_GET['field'];
 
		if($CustomHelper->check_panel_login() == 1)
        {
			 
        }
        else
        {
            return view('panel.login');
        } 
	   
		$data['title'] = $TextLanguage->lang('title_main'); 
		$data['type'] = $type;
		$data['field'] = $field;
 
		$q = "SELECT * FROM tbl_portal_website_main_menu_page WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_main_menu_page')),$q,$v);
		$r = json_decode($res);

		
 
		$main_str = ''; 
		foreach ($r as $row_cat)
		{    
			if($row_cat->page_type == 'group')
			{
				$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <a style="color:#666666">' . $row_cat->title . '</a></td></tr>';
			}
			else
			{
			 	$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/main/'.$row_cat->id . '\');" style="color:#666666">' . $row_cat->title . '</a></td></tr>';	
			}
 
			$q = "SELECT * FROM tbl_portal_website_page WHERE page_id = '0' AND cat_id = '".$row_cat->id."' AND web_id = ? ORDER BY sort ASC";	 	
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_page')),$q,$v);
			$r_sub1 = json_decode($res);
 
			foreach ($r_sub1 as $row_cat_sub1)
			{ 
				if($row_cat_sub1->page_type == 'group')
				{
					$main_str = $main_str . '<tr><td style="padding-left:50px;height:25px;">&nbsp; - <a style="color:#666666">' . $row_cat_sub1->title . '</a></td></tr>';	
				}
				else
				{
					$main_str = $main_str . '<tr><td style="padding-left:50px;height:25px;">&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/sub/'.$row_cat_sub1->id . '\');" style="color:#666666">' . $row_cat_sub1->title . '</a></td></tr>';	
				} 

				$q = "SELECT * FROM tbl_portal_website_page WHERE page_id = '".$row_cat_sub1->id."' AND cat_id = '".$row_cat->id."' AND web_id = ? ORDER BY sort ASC";	 	
				$v = $_SESSION['panel_id'];
				$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_page')),$q,$v);
				$r_sub2 = json_decode($res);
 
				foreach ($r_sub2 as $row_cat_sub2)
				{	  
					if($row_cat_sub2->page_type == 'group')
					{
						$main_str = $main_str . '<tr><td style="padding-left:100px;height:25px;">&nbsp; - <a style="color:#666666">' . $row_cat_sub2->title . '</a></td></tr>';	
					}
					else
					{
						$main_str = $main_str . '<tr><td style="padding-left:100px;height:25px;">&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/sub/'.$row_cat_sub2->id . '\');" style="color:#666666">' . $row_cat_sub2->title . '</a></td></tr>';	
					}

					$q = "SELECT * FROM tbl_portal_website_page WHERE page_id = '".$row_cat_sub2->id."' AND cat_id = '".$row_cat->id."' AND web_id = ? ORDER BY sort ASC";	 	
					$v = $_SESSION['panel_id'];
					$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_page')),$q,$v);
					$r_sub3 = json_decode($res);
 
					foreach ($r_sub3 as $row_cat_sub3)
					{	
						if($row_cat_sub3->page_type == 'group')
						{
							$main_str = $main_str . '<tr><td style="padding-left:150px;height:25px;">&nbsp; - <a style="color:#666666">' . $row_cat_sub3->title . '</a></td></tr>'; 	
						}
						else
						{
							$main_str = $main_str . '<tr><td style="padding-left:150px;height:25px;">&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/sub/'.$row_cat_sub3->id . '\');" style="color:#666666">' . $row_cat_sub3->title . '</a></td></tr>'; 	
						}

						$q = "SELECT * FROM tbl_portal_website_page WHERE page_id = '".$row_cat_sub3->id."' AND cat_id = '".$row_cat->id."' AND web_id = ? ORDER BY sort ASC";	 	
						$v = $_SESSION['panel_id'];
						$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_page')),$q,$v);
						$r_sub4 = json_decode($res);
						  
						foreach ($r_sub4 as $row_cat_sub4)
						{
							if($row_cat_sub4->page_type == 'group')
							{
								$main_str = $main_str . '<tr><td style="padding-left:200px;height:25px;">&nbsp; - <a style="color:#666666">' . $row_cat_sub4->title . '</a></td></tr>';  	
							}
							else
							{
								$main_str = $main_str . '<tr><td style="padding-left:200px;height:25px;">&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/sub/'.$row_cat_sub4->id . '\');" style="color:#666666">' . $row_cat_sub4->title . '</a></td></tr>';  	
							}

							$q = "SELECT * FROM tbl_portal_website_page WHERE page_id = '".$row_cat_sub4->id."' AND cat_id = '".$row_cat->id."' AND web_id = ? ORDER BY sort ASC";	 	
							$v = $_SESSION['panel_id'];
							$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_page')),$q,$v);
							$r_sub5 = json_decode($res);
 
							foreach ($r_sub5 as $row_cat_sub5)
							{
								$main_str = $main_str . '<tr><td style="padding-left:250px;height:25px;">&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/sub/'.$row_cat_sub5->id . '\');" style="color:#666666">' . $row_cat_sub5->title . '</a></td></tr>';   
							}
						}
					}
				}
			}  
		} 
		
		$data['main_str'] = $main_str;
		  
		$q = "SELECT * FROM tbl_portal_website_top_menu_page WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_top_menu_page')),$q,$v);
		$r = json_decode($res);
 
		$main_str = '';
		
		foreach ($r as $row_cat)
		{ 
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/top/'.$row_cat->id . '\');" style="color:#666666">' . $row_cat->title . '</a></td></tr>';	
		}
		
		$data['main_str_top'] = $main_str;
		
		
		
		
	 
		$q = "SELECT * FROM tbl_portal_website_footer_menu_page WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['panel_id'];
		$res = $CustomHelper->API_CALL_route($CustomHelper->API_URL($CustomHelper->model_to_api('website_footer_menu_page')),$q,$v);
		$r = json_decode($res);



		
		$main_str = '';
		
		foreach ($r as $row_cat)
		{ 
			$main_str = $main_str . '<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img(\'' . $field . '\',\'' . 'http://127.0.0.1:8000/'.$_SESSION['panel_web_url'].'/page/footer/'.$row_cat->id . '\');" style="color:#666666">' . $row_cat->title . '</a></td></tr>';	
		}
		
		$data['main_str_footer'] = $main_str;
		 
		return view('panel.frame_link_helper',$data);
	}
	
	public function login()
    {        
		$CustomHelper = new \App\CustomHelper;

		if($CustomHelper->check_panel_login() == 1)
        {
			?><script>window.location = '/<?php echo $_SESSION['panel_web_url'] ?>';</script><?php
            exit;
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
        
        $q = "SELECT * FROM tbl_portal_website WHERE username = '".addslashes($u)."' AND password = ?";
        $v = md5($p);
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_login_check'),$q,$v);
		
		if(trim($res) == '')
        {  
            ?><script>alert('ไม่สามารถเชื่อมต่อ Service : Login ได้ \n\n<?php echo $CustomHelper->API_URL('api_login_check') ?>');window.history.back();</script><?php
            exit;
        }
		 
        if(trim($res) == '[]')
        { 
			$CustomHelper->add_log('Login is invalid (' . $u . ')',$u,'','LOGIN_FAIL');
            
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

			$CustomHelper->add_log('Login Success ( ' . $_SESSION['panel_username'] . ' )',$_SESSION['panel_username'],$_SESSION['panel_id'],'LOGIN_PASS'); 
			  
			$d = new \stdClass(); 
			$d->last_login = date('U'); 
			$d->login_count = $_SESSION['panel_login_count']+1;
			$d->session_id = session_id(); 
			 
			$this_qr = ''; 
			foreach($d as $key=>$value) 
			{
				$this_qr = $this_qr.$key." = '".addslashes($value)."',";
			}
			$this_qr = substr($this_qr,0,-1);  	 
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),"UPDATE ".$CustomHelper->model_to_table('Portal_website_model')." SET ".$this_qr." WHERE id = '".$_SESSION['panel_id']."'",'');
			

			$q = "SELECT * FROM tbl_portal_website_style WHERE web_id = ?";
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_style'),$q,$v);
			$obj_portal_website_style = json_decode($res);

			/*
			$this->load->model('Portal_website_style_model'); 
			$d = new \stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']);   
			$q = $this->Portal_website_style_model->select_data($d);  
			 
			$row = $q; 
			*/

			$_SESSION['panel_style_logo_type'] = $obj_portal_website_style[0]->logo_type;
			$_SESSION['panel_style_logo_img1'] = $obj_portal_website_style[0]->logo_img1;
			$_SESSION['panel_style_logo_url'] = $obj_portal_website_style[0]->logo_url;
			$_SESSION['panel_style_logo_lastupdate'] = $obj_portal_website_style[0]->logo_lastupdate;
			$_SESSION['panel_style_template_id'] = $obj_portal_website_style[0]->template_id;
			$_SESSION['panel_style_template_lastupdate'] = $obj_portal_website_style[0]->template_lastupdate;
			$_SESSION['panel_style_info_title'] = $obj_portal_website_style[0]->info_title;
			$_SESSION['panel_style_info_keyword'] = $obj_portal_website_style[0]->info_keyword;
			$_SESSION['panel_style_info_description'] = $obj_portal_website_style[0]->info_description;
			$_SESSION['panel_style_info_lastupdate'] = $obj_portal_website_style[0]->info_lastupdate;
			$_SESSION['panel_style_search_option'] = $obj_portal_website_style[0]->search_option;
			$_SESSION['panel_style_search_id'] = $obj_portal_website_style[0]->search_id;
			$_SESSION['panel_style_search_layout'] = $obj_portal_website_style[0]->search_layout; 
			$_SESSION['panel_style_lang_option'] = $obj_portal_website_style[0]->lang_option;
			$_SESSION['panel_style_lang_id'] = $obj_portal_website_style[0]->lang_id;
			$_SESSION['panel_style_lang_layout'] = $obj_portal_website_style[0]->lang_layout; 
			$_SESSION['panel_style_social_option'] = $obj_portal_website_style[0]->social_option;
			$_SESSION['panel_style_social_id'] = $obj_portal_website_style[0]->social_id;
			$_SESSION['panel_style_social_layout'] = $obj_portal_website_style[0]->social_layout; 
			$_SESSION['panel_style_social_fb'] = $obj_portal_website_style[0]->social_fb;
			$_SESSION['panel_style_social_tw'] = $obj_portal_website_style[0]->social_tw;
			$_SESSION['panel_style_social_ins'] = $obj_portal_website_style[0]->social_ins;
			$_SESSION['panel_style_social_yt'] = $obj_portal_website_style[0]->social_yt; 
			$_SESSION['panel_style_copyright_option'] = $obj_portal_website_style[0]->copyright_option;
			$_SESSION['panel_style_copyright_info'] = $obj_portal_website_style[0]->copyright_info;  
			$_SESSION['panel_style_copyright_info_en'] = $obj_portal_website_style[0]->copyright_info_en;  
			$_SESSION['panel_style_lang_start'] = $obj_portal_website_style[0]->lang_start;
			$_SESSION['panel_style_block_ip'] = $obj_portal_website_style[0]->block_ip;
			$_SESSION['panel_style_close_status'] = $obj_portal_website_style[0]->close_status;
			$_SESSION['panel_style_close_type'] = $obj_portal_website_style[0]->close_type;
			$_SESSION['panel_style_close_info'] = $obj_portal_website_style[0]->close_info;
			$_SESSION['panel_style_close_redirect'] = $obj_portal_website_style[0]->close_redirect;
			$_SESSION['panel_style_css_info'] = $obj_portal_website_style[0]->css_info;
			$_SESSION['panel_style_html_head_info'] = $obj_portal_website_style[0]->html_head_info;
			$_SESSION['panel_style_html_body_info'] = $obj_portal_website_style[0]->html_body_info;
			$_SESSION['panel_style_html_foot_info'] = $obj_portal_website_style[0]->html_foot_info;  
			$_SESSION['panel_style_call_center_info'] = $obj_portal_website_style[0]->call_center_info; 
			$_SESSION['panel_style_slogan_1'] = $obj_portal_website_style[0]->slogan_1; 
			$_SESSION['panel_style_slogan_2'] = $obj_portal_website_style[0]->slogan_2;  
			$_SESSION['panel_style_slogan_1_en'] = $obj_portal_website_style[0]->slogan_1_en; 
			$_SESSION['panel_style_slogan_2_en'] = $obj_portal_website_style[0]->slogan_2_en;  
			$_SESSION['panel_style_contact_text_1'] = $obj_portal_website_style[0]->contact_text_1; 
			$_SESSION['panel_style_contact_text_2'] = $obj_portal_website_style[0]->contact_text_2; 
			$_SESSION['panel_style_contact_text_3'] = $obj_portal_website_style[0]->contact_text_3; 
			$_SESSION['panel_style_contact_text_4'] = $obj_portal_website_style[0]->contact_text_4; 
			  
			/*
			$this->load->model('Portal_website_all_bg_model'); 
			$d = new \stdClass();  
			$d->where = array('web_id' => $_SESSION['panel_id']);   
			$q = $this->Portal_website_all_bg_model->select_data($d);   
			*/

			if($_SESSION['panel_web_package'] == '1')
			{
				?><script>window.location = '/<?php echo $_SESSION['panel_web_url'] ?>';</script>
				<?php
        		exit;
			} 
			else
			{
				?>
				<script>window.location = '/เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่1';</script>
				<?php
				exit;
			} 
		} 
        exit;
	}
	
	public function logout()
    {        
		$CustomHelper = new \App\CustomHelper;
		
		if($CustomHelper->check_panel_login() == 1) 
        {     
			$CustomHelper->add_log('Logout ( ' . $_SESSION['panel_username'] . ' )',$_SESSION['panel_username'],$_SESSION['panel_id'],'LOGOUT');
        } 

		session_destroy(); 
		?><script>window.location = '/';</script><?php
        exit;
	}

	public function templatestep1()
    {        
		$CustomHelper = new \App\CustomHelper;

		if($CustomHelper->check_panel_login() == 1)
        { 
			return view('panel.templatestep1'); 
        } 
		else
		{
			?><script>window.location = '/';</script><?php
            exit;
		}
    }

	public function templatestep2()
    {        
		$CustomHelper = new \App\CustomHelper;

		if($CustomHelper->check_panel_login() == 1)
        { 
			$icon_logo_have = false;
			$icon_topmenu_have = false;
			$icon_mainmenu_have = false;
			$icon_slide_have = false;
			$icon_footmenu_have = false;
			$icon_text_have = false;


			if($_SESSION['panel_style_logo_img1'] != '')
			{
				$icon_logo_have = true;
			}
			 
			$q = "SELECT COUNT(id) AS count_id FROM tbl_portal_website_top_menu_page WHERE web_id = ? AND status = '1'";
        	$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_top_menu_page'),$q,$v);
			$obj_check = json_decode($res);
			 
			if($obj_check[0]->count_id > 0)
			{
				$icon_topmenu_have = true;
			}

			$q = "SELECT COUNT(id) AS count_id FROM tbl_portal_website_main_menu_page WHERE web_id = ? AND status = '1'";
        	$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_main_menu_page'),$q,$v);
			$obj_check = json_decode($res);
			 
			if($obj_check[0]->count_id > 0)
			{
				$icon_mainmenu_have = true;
			}

			$q = "SELECT COUNT(id) AS count_id FROM tbl_portal_website_bg WHERE web_id = ? AND status = '1'";
        	$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_bg'),$q,$v);
			$obj_check = json_decode($res);
			 
			if($obj_check[0]->count_id > 0)
			{
				$icon_slide_have = true;
			}

			$q = "SELECT COUNT(id) AS count_id FROM tbl_portal_website_footer_menu_page WHERE web_id = ? AND status = '1'";
        	$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_footer_menu_page'),$q,$v);
			$obj_check = json_decode($res);
			 
			if($obj_check[0]->count_id > 0)
			{
				$icon_footmenu_have = true;
			}

			$q = "SELECT web_name FROM tbl_portal_website WHERE id = ? AND status = '1'";
        	$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website'),$q,$v);
			$obj_check = json_decode($res);
 
			if($obj_check[0]->web_name != '')
			{
				$icon_text_have = true;
			}

			$data['icon_logo_have'] = $icon_logo_have;
			$data['icon_topmenu_have'] = $icon_topmenu_have;
			$data['icon_mainmenu_have'] = $icon_mainmenu_have;
			$data['icon_slide_have'] = $icon_slide_have;
			$data['icon_footmenu_have'] = $icon_footmenu_have;
			$data['icon_text_have'] = $icon_text_have;
			
			return view('panel.templatestep2',$data); 
        } 
		else
		{
			?><script>window.location = '/';</script><?php
            exit;
		}
    }

	public function templatestep3()
    {        
		$CustomHelper = new \App\CustomHelper;

		if($CustomHelper->check_panel_login() == 1)
        { 
			$q = "UPDATE tbl_portal_website SET web_package = '1' WHERE id = ?";
			$v = $_SESSION['panel_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website'),$q,$v);  
			$_SESSION['panel_web_package'] = '1';
			
			return view('panel.templatestep3'); 
        } 
		else
		{
			?><script>window.location = '/';</script><?php
            exit;
		}
    }

	public function templatestep1_submit()
    {        
		$CustomHelper = new \App\CustomHelper;

		if($CustomHelper->check_panel_login() == 1)
        {
			$this_value = 1;
			if($_GET['id'] == 'blue')
			{
				$this_value = 1;
			}
			else if($_GET['id'] == 'orange')
			{
				$this_value = 2;
			}
			else if($_GET['id'] == 'green')
			{
				$this_value = 3;
			}
			else if($_GET['id'] == 'pink')
			{
				$this_value = 4;
			}
			else if($_GET['id'] == 'purple')
			{
				$this_value = 5;
			}
			
			$q = "UPDATE tbl_portal_website_style SET template_id = ?, template_lastupdate = '".date('U')."' WHERE web_id = '".$_SESSION['panel_id']."'";
			$v = $_GET['no'].$this_value;
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_style'),$q,$v); 

			$_SESSION['panel_style_template_id'] = $_GET['no'].$this_value;

			if(isset($_GET['re']) && $_GET['re'] == '1')
			{
				?><script>window.location = '/manage-admin/setting';</script><?php
			}
			else
			{
				?><script>window.location = '/เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่2';</script><?php
			} 
        	exit;
        } 
		else
		{
			?><script>window.location = '/';</script><?php
            exit;
		}
    }
 
	public function web_home()
    {    
		$CustomHelper = new \App\CustomHelper;
		 
		if($CustomHelper->check_panel_login() == 1)
		{   
						
		}
		 
		$this->include_header();
 
		$data['mod'] = $this->mod;  
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $_SESSION['portal_website_' . $this->mod . '_web_name']; 

		$q = "SELECT * FROM tbl_portal_website_contentbox WHERE web_id = ? AND status = '1' ORDER BY sort ASC";
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_contentbox'),$q,$v);
		$obj_portal_website_contentbox = json_decode($res);

		$data['box'] = $obj_portal_website_contentbox;
		$r_box = $obj_portal_website_contentbox; 
 
		foreach($r_box as $r_box_loop)
		{   
			if(substr($r_box_loop->{'box1'},0,1) == 'm')
			{
				$new_id = substr($r_box_loop->{'box1'},1); 
				$q = "SELECT * FROM tbl_portal_website_main_menu_page WHERE web_id = '".$_SESSION['portal_website_' . $this->mod . '_id']."' AND id = ?";
				$v = $new_id; 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_main_menu_page'),$q,$v);
				$obj_portal_website_main_menu_page = json_decode($res); 
				$data['box_page'][$r_box_loop->id][1] = $obj_portal_website_main_menu_page;
				$data['box_page_type'][$r_box_loop->id][1] = 'main_menu'; 
			}
			else
			{
				$q = "SELECT * FROM tbl_portal_website_page WHERE web_id = '".$_SESSION['portal_website_' . $this->mod . '_id']."' AND id = ?";
				$v = $r_box_loop->{'box1'}; 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL('api_website_page'),$q,$v);
				$obj_portal_website_page = json_decode($res); 
				$data['box_page'][$r_box_loop->id][1] = $obj_portal_website_page;
				$data['box_page_type'][$r_box_loop->id][1] = 'page';		
			} 
		}    

		return view('home');
    }
}
