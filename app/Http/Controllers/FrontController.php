<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Route;
 
class FrontController extends Controller
{   
	var $mod = 'ballsite'; 
	var $theme = 'theme_1';
	
	public function index($theme_view = '')
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		 
		$this->include_header();  
 
		$data['mod'] = $this->mod; 
  
		if($theme_view <> '')
		{
			$data['theme'] = 'theme_'.$theme_view;  
			$data['force_bg'] = '';
		}
		else
		{
		 	$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id']; 
		}
		$data['title'] = $_SESSION['portal_website_' . $this->mod . '_web_name']; 
   
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_contentbox_model')." WHERE web_id = ? AND status = '1' ORDER BY sort ASC"; 	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_contentbox_model')),$q,$v);
		$q = json_decode($res);
 
		$data['box'] = $q;
		$r_box = $q;
 
		$template_id = substr($_SESSION['portal_website_style_' . $this->mod . '_template_id'],0,1);
		$data['template_id'] = $_SESSION['portal_website_style_' . $this->mod . '_template_id'];
		$_SESSION[$this->mod.'_template_id'] = $_SESSION['portal_website_style_' . $this->mod . '_template_id'];
		$str_template = '';
		if($template_id == '1')
		{
			$str_template = 'home';
		}
		else if($template_id == '2')
		{
			$str_template = 'home-2';
		}
		else if($template_id == '3')
		{
			$str_template = 'home-3';
		}
		else if($template_id == '4')
		{
			$str_template = 'home-4';
		}
		else if($template_id == '5')
		{
			$str_template = 'home-5';
		}

		if($this->mod != 'ballsite')
		{
			$str_template = 'home';
		}
   
		$is_convert_box = false;
		foreach($r_box as $r)
		{    
			if(trim($r->box2) != '')
			{
				$is_convert_box = true;

				$arr_box[] = $r->box1;
				$arr_box[] = $r->box2;
				$arr_box[] = $r->box3;
				$arr_box[] = $r->box4;
			} 
		}
		 
		if($is_convert_box == true)
		{  
			$s_index = 0;
			foreach($arr_box as $item)
			{     
				if(strpos($item,"m") > -1)
				{
					$item = str_replace("m","",$item);
					
					$q = "SELECT page_type,data_id FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? AND id = '".$item."'";	 
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
					$q = json_decode($res);					
				}
				else
				{
					$q = "SELECT page_type,data_id FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND id = '".$item."'"; 
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
					$q = json_decode($res);
				} 
 
				if(count($q) > 0)
				{
					$this_box_number = 1;
					if($q[0]->page_type == 'news')
					{
						$this_box_number = 1;
					}
					else if($q[0]->page_type == 'faq')
					{
						$this_box_number = 2;
					}
					else if($q[0]->page_type == 'calendar')
					{
						$this_box_number = 3;
					}
					else if($q[0]->page_type == 'gallery')
					{
						$this_box_number = 4;
					}
					else if($q[0]->page_type == 'vdo')
					{
						$this_box_number = 5;
					}
					else if($q[0]->page_type == 'download')
					{
						$this_box_number = 6;
					}
					else if($q[0]->page_type == 'banner')
					{
						$this_box_number = 7;
					}
					else if($q[0]->page_type == 'question')
					{
						$this_box_number = 8;
					}
					else if($q[0]->page_type == 'poll')
					{
						$this_box_number = 9;
					}
					
					$r_box[$s_index] = new \stdClass(); 
					$r_box[$s_index]->id = $s_index;
					$r_box[$s_index]->web_id = $_SESSION['portal_website_' . $this->mod . '_id'];
					$r_box[$s_index]->cat_id = '0';
					$r_box[$s_index]->title = '';
					$r_box[$s_index]->en_title = '';
					$r_box[$s_index]->box_number = $this_box_number;
					$r_box[$s_index]->box1 = $q[0]->data_id;
					$r_box[$s_index]->box2 = '';
					$r_box[$s_index]->box3 = '';
					$r_box[$s_index]->box4 = '';
					$r_box[$s_index]->last_create = '1614525283';
					$r_box[$s_index]->last_update = '1614525283';
					$r_box[$s_index]->sort = '1';
					$r_box[$s_index]->status = '1';
					$r_box[$s_index]->date_start = '0';
					$r_box[$s_index]->date_end = '0';
					$r_box[$s_index]->date_set = '0';
					 
					$s_index++;
				} 
			}

			$data['box'] = $r_box;
		}
 
		$count_this = 1; 		 
		foreach($r_box as $r)
		{    
			switch($r->box_number)
			{
				case "7" : 
					$this_model = 'Portal_website_banner_model';
					$this_model_cat = 'Portal_website_banner_cat_model';    
					$this_order_by = 'sort ASC';
					$this_limit = ' LIMIT 0,10 ';
					$this_type = 'banner';
					break;	
				case "3" : 
					$this_model = 'Portal_website_activities_model';
					$this_model_cat = 'Portal_website_activities_cat_model'; 
					$this_order_by = 'date_news DESC';  
					$this_limit = ' LIMIT 0,20 '; 
					$this_type = 'calendar';
					break;	
				case "6" : 
					$this_model = 'Portal_website_download_model';
					$this_model_cat = 'Portal_website_download_cat_model';
					$this_order_by = 'sort ASC';  
					$this_limit = ' LIMIT 0,10 '; 
					$this_type = 'download';
					break;	
				case "2" : 
					$this_model = 'Portal_website_faq_model'; 
					$this_model_cat = 'Portal_website_faq_cat_model';
					$this_order_by = 'sort ASC';
					$this_limit = ' LIMIT 0,10 ';  
					$this_type = 'faq';
					break;	
				case "4" : 
					$this_model = 'Portal_website_gallery_model';
					$this_model_cat = 'Portal_website_gallery_cat_model';
					$this_order_by = 'sort ASC';
					$this_limit = ' LIMIT 0,10 '; 
					$this_type = 'gallery';
					break; 
				case "1" : 
					$this_model = 'Portal_website_news_model';
					$this_model_cat = 'Portal_website_news_cat_model';
					$this_order_by = 'sort DESC ';
					$this_limit = ' LIMIT 0,3 ';
					$this_type = 'news';
					break;	
				case "5" : 
					$this_model = 'Portal_website_vdo_model';
					$this_model_cat = 'Portal_website_vdo_cat_model';
					$this_order_by = 'sort DESC';
					$this_limit = ' LIMIT 0,4 ';
					$this_type = 'vdo';
					break; 
				case "9" : 
					$this_model = 'Portal_website_poll_model';
					$this_model_cat = 'Portal_website_poll_cat_model';
					$this_order_by = 'id DESC';
					$this_limit = ' LIMIT 0,1 '; 
					$this_type = 'poll';		
					break;	
				case "8" : 
					$this_model = 'Portal_website_question_cat_model';
					$this_model_cat = 'Portal_website_question_cat_model';
					$this_order_by = 'sort ASC';
					$this_limit = ' LIMIT 0,2 ';
					$this_type = 'question';
					break;   	
			}  
			
			$add_qr = ""; 
			if(isset($_GET['f_m']) && $_GET['f_m'] != '' && $r->box_number == 3)
			{
				$m_y = explode("_",$_GET['f_m']);

				$d_start = mktime(0,0,0,$m_y[0],1,$m_y[1]); 
				$last_day = date("t",mktime(23,59,59,$m_y[0],1,$m_y[1])); 
				$d_end = mktime(23,59,59,$m_y[0],$last_day,$m_y[1]);
	
				$add_qr = " AND (date_news >= '".$d_start."' AND date_news <= '".$d_end."') ";
			}

			if($r->box1 != '')
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND cat_id = '".$r->box1."' ".$add_qr." ORDER BY ".$this_order_by."".$this_limit; 
			}
			else
			{
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' ".$add_qr." ORDER BY id DESC".$this_limit;
			
				if($r->box_number == 3)
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' ".$add_qr." ORDER BY date_news DESC".$this_limit;			
				}
			}
 
			$v = $_SESSION['portal_website_' . $this->mod . '_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
			$q = json_decode($res);
 
			$data['data_box_'.$r->box_number.'_'.$r->id] = $q; 

			if($r->box_number == 8)
			{ 
				if(isset($data['data_box_'.$r->box_number.'_'.$r->id][0]->id))
				{
					$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id = $data['data_box_'.$r->box_number.'_'.$r->id][0]->id;
				} 
			}
			 
			if(isset($data['data_box_'.$r->box_number.'_'.$r->id][0]->id) && isset($data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id))
			{ 
				$q = "SELECT title,en_title FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE id = '".$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id."' LIMIT 0,1"; 
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
				$q = json_decode($res);
 
				$data['data_box_cat_'.$r->box_number.'_'.$r->id] = $q;

				$q = "SELECT id FROM tbl_portal_website_main_menu_page WHERE web_id = ? AND page_type = '".$this_type."' AND data_id = '".$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id."'  LIMIT 0,1"; 

				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
				$q = json_decode($res);
 
				if(count($q) > 0)
				{
					$data['data_box_link_'.$r->box_number.'_'.$r->id] = "http://127.0.0.1:8000/".$this->mod."/page/main/".$q[0]->id."/".$data['data_box_cat_'.$r->box_number.'_'.$r->id][0]->title;
				}
				else
				{
					$q = "SELECT id FROM tbl_portal_website_page WHERE web_id = ? AND page_type = '".$this_type."' AND data_id = '".$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id."'  LIMIT 0,1"; 
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res);

					if(count($q) > 0)
					{
						$data['data_box_link_'.$r->box_number.'_'.$r->id] = "http://127.0.0.1:8000/".$this->mod."/page/sub/".$q[0]->id."/".$data['data_box_cat_'.$r->box_number.'_'.$r->id][0]->title;
					}
					else
					{
						$q = "SELECT id FROM tbl_portal_website_top_menu_page WHERE web_id = ? AND page_type = '".$this_type."' AND data_id = '".$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id."'  LIMIT 0,1"; 
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
						$q = json_decode($res);

						if(count($q) > 0)
						{
							$data['data_box_link_'.$r->box_number.'_'.$r->id] = "http://127.0.0.1:8000/".$this->mod."/page/top/".$q[0]->id."/".$data['data_box_cat_'.$r->box_number.'_'.$r->id][0]->title;
						}
						else
						{
							$q = "SELECT id FROM tbl_portal_website_footer_menu_page WHERE web_id = ? AND page_type = '".$this_type."' AND data_id = '".$data['data_box_'.$r->box_number.'_'.$r->id][0]->cat_id."'  LIMIT 0,1"; 
							$v = $_SESSION['portal_website_' . $this->mod . '_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
							$q = json_decode($res);

							if(count($q) > 0)
							{
								$data['data_box_link_'.$r->box_number.'_'.$r->id] = "http://127.0.0.1:8000/".$this->mod."/page/footer/".$q[0]->id."/".$data['data_box_cat_'.$r->box_number.'_'.$r->id][0]->title;
							}
							else
							{
								$data['data_box_link_'.$r->box_number.'_'.$r->id] = "";
							}
						}
					}
				} 
			} 
		}  
 
		return view($str_template,$data); 
	} 

	public function include_header()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;

		if(strpos($_SERVER['REQUEST_URI'],'/') > -1)
		{
			$a = explode('/',$_SERVER['REQUEST_URI']);
			if(strpos($a[1],'?') > -1)
			{
				$b = explode('?',$a[1]);
				$this->mod = $b[0];
			}
			else
			{
				$this->mod = $a[1];
			}
			
		}
		else
		{ 
			$this->mod = $_SERVER['REQUEST_URI'];
		}

		if(isset($_GET['lang']))
		{ 
			if($_GET['lang'] == 'th')
			{
				$_SESSION["portal_lang"] = "thai";
			}
			else if($_GET['lang'] == 'en')
			{
				$_SESSION["portal_lang"] = "english";
			}
		}
  
		if(@$_SESSION['member_login'] == 1)
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
		  
		//if(empty($_SESSION['web_' . $this->mod . '_get_data']))
		if(true)
		{
			$_SESSION['web_' . $this->mod . '_get_data'] = 1;
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_model')." WHERE web_url = ? LIMIT 0,1";	 	
			$v = $this->mod;
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_model')),$q,$v);
			$r = json_decode($res);
			 
			$web_id = $r[0]->id;  
			 
			$_SESSION['portal_website_' . $this->mod . '_id'] = $r[0]->id;
			$_SESSION['portal_website_' . $this->mod . '_username'] = $r[0]->username;
			$_SESSION['portal_website_' . $this->mod . '_web_code'] = $r[0]->web_code;
			$_SESSION['portal_website_' . $this->mod . '_web_name_th'] = $r[0]->web_name;
			$_SESSION['portal_website_' . $this->mod . '_web_name_en'] = $r[0]->web_name_en;
			$_SESSION['portal_website_' . $this->mod . '_web_desc'] = $r[0]->web_desc;
			$_SESSION['portal_website_' . $this->mod . '_web_url'] = $r[0]->web_url;
			$_SESSION['portal_website_' . $this->mod . '_web_disk'] = $r[0]->web_disk;
			$_SESSION['portal_website_' . $this->mod . '_web_disk_use'] = $r[0]->web_disk_use;
			$_SESSION['portal_website_' . $this->mod . '_web_type'] = $r[0]->web_type;
			$_SESSION['portal_website_' . $this->mod . '_web_package'] = $r[0]->web_package;
			$_SESSION['portal_website_' . $this->mod . '_profile_name'] = $r[0]->profile_name;
			$_SESSION['portal_website_' . $this->mod . '_profile_lastname'] = $r[0]->profile_lastname;
			$_SESSION['portal_website_' . $this->mod . '_profile_email'] = $r[0]->profile_email;
			$_SESSION['portal_website_' . $this->mod . '_profile_mobile'] = $r[0]->profile_mobile;
			$_SESSION['portal_website_' . $this->mod . '_profile_idcard'] = $r[0]->profile_idcard;
			$_SESSION['portal_website_' . $this->mod . '_register_confirm'] = $r[0]->register_confirm;
			$_SESSION['portal_website_' . $this->mod . '_login_count'] = $r[0]->login_count;
			$_SESSION['portal_website_' . $this->mod . '_login_wrong'] = $r[0]->login_wrong;
			$_SESSION['portal_website_' . $this->mod . '_last_login'] = $r[0]->last_login;
			$_SESSION['portal_website_' . $this->mod . '_last_create'] = $r[0]->last_create;
			$_SESSION['portal_website_' . $this->mod . '_last_update'] = $r[0]->last_update;
			$_SESSION['portal_website_' . $this->mod . '_status'] = $r[0]->status; 
			$_SESSION['portal_website_' . $this->mod . '_session_id'] = $r[0]->session_id; 
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_style_model')." WHERE web_id = ? LIMIT 0,1";	 	
			$v = $web_id;
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),$q,$v);
			$r = json_decode($res);
 
			$_SESSION['portal_website_style_' . $this->mod . '_logo_type'] = $r[0]->logo_type; 
			$_SESSION['portal_website_style_' . $this->mod . '_logo_img1'] = $r[0]->logo_img1; 
			$_SESSION['portal_website_style_' . $this->mod . '_logo_url'] = $r[0]->logo_url; 
			$_SESSION['portal_website_style_' . $this->mod . '_template_id'] = $r[0]->template_id; 
			$_SESSION['portal_website_style_' . $this->mod . '_info_title'] = $r[0]->info_title; 
			$_SESSION['portal_website_style_' . $this->mod . '_info_keyword'] = $r[0]->info_keyword; 
			$_SESSION['portal_website_style_' . $this->mod . '_info_description'] = $r[0]->info_description; 
			$_SESSION['portal_website_style_' . $this->mod . '_search_option'] = $r[0]->search_option; 
			$_SESSION['portal_website_style_' . $this->mod . '_search_id'] = $r[0]->search_id; 
			$_SESSION['portal_website_style_' . $this->mod . '_search_layout'] = $r[0]->search_layout; 
			$_SESSION['portal_website_style_' . $this->mod . '_lang_option'] = $r[0]->lang_option; 
			$_SESSION['portal_website_style_' . $this->mod . '_lang_id'] = $r[0]->lang_id; 
			$_SESSION['portal_website_style_' . $this->mod . '_lang_layout'] = $r[0]->lang_layout; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_option'] = $r[0]->social_option; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_id'] = $r[0]->social_id; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_layout'] = $r[0]->social_layout; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_fb'] = $r[0]->social_fb; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_tw'] = $r[0]->social_tw; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_ins'] = $r[0]->social_ins; 
			$_SESSION['portal_website_style_' . $this->mod . '_social_yt'] = $r[0]->social_yt; 
			$_SESSION['portal_website_style_' . $this->mod . '_copyright_option'] = $r[0]->copyright_option; 
			$_SESSION['portal_website_style_' . $this->mod . '_copyright_info'] = $r[0]->copyright_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_copyright_info_en'] = $r[0]->copyright_info_en; 
			$_SESSION['portal_website_style_' . $this->mod . '_lang_start'] = $r[0]->lang_start; 
			$_SESSION['portal_website_style_' . $this->mod . '_block_ip'] = $r[0]->block_ip; 
			$_SESSION['portal_website_style_' . $this->mod . '_close_status'] = $r[0]->close_status;  
			$_SESSION['portal_website_style_' . $this->mod . '_close_type'] = $r[0]->close_type; 
			$_SESSION['portal_website_style_' . $this->mod . '_close_info'] = $r[0]->close_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_close_redirect'] = $r[0]->close_redirect; 
			$_SESSION['portal_website_style_' . $this->mod . '_css_info'] = $r[0]->css_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_html_head_info'] = $r[0]->html_head_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_html_body_info'] = $r[0]->html_body_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_html_foot_info'] = $r[0]->html_foot_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_call_center_info'] = $r[0]->call_center_info; 
			$_SESSION['portal_website_style_' . $this->mod . '_slogan_1'] = $r[0]->slogan_1;
			$_SESSION['portal_website_style_' . $this->mod . '_slogan_2'] = $r[0]->slogan_2;
			$_SESSION['portal_website_style_' . $this->mod . '_slogan_1_en'] = $r[0]->slogan_1_en;
			$_SESSION['portal_website_style_' . $this->mod . '_slogan_2_en'] = $r[0]->slogan_2_en;
			$_SESSION['portal_website_style_' . $this->mod . '_contact_text_1'] = $r[0]->contact_text_1;
			$_SESSION['portal_website_style_' . $this->mod . '_contact_text_2'] = $r[0]->contact_text_2;
			$_SESSION['portal_website_style_' . $this->mod . '_contact_text_3'] = $r[0]->contact_text_3;
			$_SESSION['portal_website_style_' . $this->mod . '_contact_text_4'] = $r[0]->contact_text_4;
			  
			if(empty($_SESSION["portal_lang"]))
			{ 
				$_SESSION["portal_lang"] = "thai";
			}	
			 
			$_SESSION['portal_website_' . $this->mod . '_web_name'] = $CustomHelper->L($_SESSION['portal_website_' . $this->mod . '_web_name_th'],$_SESSION['portal_website_' . $this->mod . '_web_name_en']);
			 	
			$str_check_lang = "AND en_title <> ''";
			if($_SESSION["portal_lang"] == 'thai')
			{
				$str_check_lang = "AND title <> ''";
			}

			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_all_bg_model')." WHERE web_id = ? LIMIT 0,1";	 	
			$v = $web_id;
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_all_bg_model')),$q,$v);
			$r = json_decode($res);
 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news'] = $r[0]->mod_news; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_member'] = $r[0]->mod_member; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_activities'] = $r[0]->mod_activities; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_gallery'] = $r[0]->mod_gallery; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_webboard'] = $r[0]->mod_webboard; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_poll'] = $r[0]->mod_poll; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_question'] = $r[0]->mod_question; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_faq'] = $r[0]->mod_faq; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_download'] = $r[0]->mod_download; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_search'] = $r[0]->mod_search; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_sitemap'] = $r[0]->mod_sitemap; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_banner'] = $r[0]->mod_banner; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_texteditor'] = $r[0]->mod_texteditor; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_contact'] = $r[0]->mod_contact;  
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_vdo'] = $r[0]->mod_vdo; 
			$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_organize'] = $r[0]->mod_organize; 
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_bg_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0') OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "') LIMIT 0,99";	 	
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_bg_model')),$q,$v);
			$q = json_decode($res);
 
			$_SESSION['portal_website_bg_' . $this->mod . '_list'] = $q;
 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_contentbox_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0') OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "') ORDER BY sort ASC LIMIT 0,99";	 	
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_contentbox_model')),$q,$v);
			$q = json_decode($res); 
 
			$_SESSION['portal_website_contentbox_' . $this->mod . '_list'] = $q; 
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_contentbox_cat_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0') OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "') ORDER BY sort ASC LIMIT 0,99";	 	
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_contentbox_cat_model')),$q,$v);
			$q = json_decode($res); 
 
			$_SESSION['portal_website_contentbox_cat_' . $this->mod . '_list'] = $q;	
			 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_footer_menu_page_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0' " . $str_check_lang . ") OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "' " . $str_check_lang . ") ORDER BY sort ASC LIMIT 0,99";	 	
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_footer_menu_page_model')),$q,$v);
			$q = json_decode($res); 

			$_SESSION['portal_website_footer_menu_' . $this->mod . '_list'] = $q;
			
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_top_menu_page_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0' " . $str_check_lang . ") OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "' " . $str_check_lang . ") ORDER BY sort ASC LIMIT 0,99"; 
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_top_menu_page_model')),$q,$v);
			$q = json_decode($res);  
			$_SESSION['portal_website_sub_menu_' . $this->mod . '_list'] = $q;	
 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND date_set = '0' " . $str_check_lang . ") OR (web_id = '".$web_id."' AND status = '1' AND date_set = '1' AND date_start < '" . date('U') . "' AND date_end > '" . date('U') . "' " . $str_check_lang . ") ORDER BY sort ASC LIMIT 0,99";	 	
			$v = '';
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
			$q = json_decode($res);
			 
			$_SESSION['portal_website_main_menu_' . $this->mod . '_list'] = $q;
			  
			$ball_check_it = 22; 
			 
			$show_drop_down = $q;
			foreach($show_drop_down as $r)
			{
				if($r->page_type == 'group')
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE (web_id = '".$web_id."' AND status = '1' AND cat_id = '" . $r->id . "' AND page_id = '0' " . $str_check_lang . ") ORDER BY sort ASC LIMIT 0,99";	 	
					$v = '';
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
					$q = json_decode($res);
					 
					$_SESSION['portal_website_page_' . $r->id . '_' . $this->mod . '_list'] = $q;
					 
					foreach($_SESSION['portal_website_page_' . $r->id . '_' . $this->mod . '_list'] as $r_sub)
					{ 
						$menu_cache_name = "menu_cache/".$r->id."_".$r_sub->id."_".$this->mod.".php";
						
						if (file_exists($menu_cache_name)) 
						{
							$ball_check_it = 44;  
							$_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $this->mod . '_list'] = '1'; 
						}
						else
						{ 
							$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE (web_id = '".$web_id."' AND cat_id = '" . $r->id . "' AND status = '1' AND page_id = '" . $r_sub->id . "' " . $str_check_lang . ") ORDER BY sort ASC LIMIT 0,10";	 	
							$v = '';
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
							$q = json_decode($res);
  
							if(count($q) > 0)
							{ 
								$_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $this->mod . '_list'] = $q;
							}	
						} 
					} 
				} 
			}
			 
			/********** Statistic Start ************/  	
			/*  
			$d = new \stdClass(); 
			$d->column = '*';
			$d->where = array('web_id' => $web_id,'status' => '1'); 
			$d->orderby = 'sort ASC'; 
			$d->limit_row = '99'; 
			$d->limit_offset = '0'; 
			$d->count = false;  
			$q = $this->Portal_website_page_model->select_data($d);  	
			
			$_SESSION['portal_website_page_' . $this->mod . '_list'] = $q->result();	
			*/
			/*   
			$this->Portal_website_front_log_model->add_log($this->mod);  
 
			$d = new \stdClass(); 
			$d->column = 'id';
			$d->where = array('mod_name' => $this->mod); 
			$d->count = true; 
			$q = $this->Portal_website_front_log_model->select_data($d);   
			$_SESSION['portal_website_front_' . $this->mod . '_log'] = $q; 
			
			
			$start_today = mktime(0,0,0,date("n"),date("j"),date("Y"));  
			$d = new \stdClass(); 
			$d->column = 'id';
			$d->where = array('mod_name' => $this->mod, 'last_create >' => $start_today); 
			$d->count = true; 
			$q = $this->Portal_website_front_log_model->select_data($d);  	
			$_SESSION['portal_website_front_' . $this->mod . '_log_today'] = $q;  
			
			
			$last_5_min = (date('U') - (60 * 5)); 
			$d = new \stdClass(); 
			$d->column = 'id';
			$d->where = array('mod_name' => $this->mod, 'last_create >' => $last_5_min); 
			$d->group_by = 'session_id';
			$d->count = false; 
			$q = $this->Portal_website_front_log_model->select_data($d);    
			$_SESSION['portal_website_front_' . $this->mod . '_log_online'] = $q->num_rows;		
			*/ 
			/********** Statistic End ************/  	
			 
			 
			  
			$_SESSION['portal_website_front_' . $this->mod . '_log'] = date("YmdHis");
			$_SESSION['portal_website_front_' . $this->mod . '_log_today'] = $ball_check_it;
			$_SESSION['portal_website_front_' . $this->mod . '_log_online'] = $ball_check_it;
				 
		}  
		 
		$this->include_lang();
				
		if(strlen(@$_SESSION['portal_website_style_' . $this->mod . '_block_ip']) > 5)
		{
			if(strpos($_SESSION['portal_website_style_' . $this->mod . '_block_ip'],',') > -1)
			{
				$arr = explode(',',$_SESSION['portal_website_style_' . $this->mod . '_block_ip']);
				while($each = each($arr))
				{
					if($_SERVER['REMOTE_ADDR'] == $each[1])
					{
						exit;	
					}  
				}
			}
			else
			{
				if($_SERVER['REMOTE_ADDR'] == $_SESSION['portal_website_style_' . $this->mod . '_block_ip'])
				{
					exit;	
				} 
			}
		}
		
		if(@$_SESSION['portal_website_style_' . $this->mod . '_close_status'] == '1')
		{ 
			if(@$_SESSION['portal_website_style_' . $this->mod . '_close_type'] == 'link')
			{
				?> 
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title><?php echo $_SESSION['portal_website_' . $this->mod . '_web_name_th'] ?>- <?php echo $_SESSION['portal_website_' . $this->mod . '_web_name_en'] ?></title>
                </head>
                <frameset rows="0,*" frameborder="no" border="0" framespacing="0">
                    <frame src="UntitledFrame-3" scrolling="No" noresize="noresize" id="topFrame" />
                    <frame src="<?php echo @$_SESSION['portal_website_style_' . $this->mod . '_close_redirect'] ?>" name="mainFrame" id="mainFrame" />
                </frameset>
                <noframes><body>
                </body></noframes>
                </html> 
                <?php
				exit;
			}
			else
			{
				?>
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Under Construction</title>
                </head> 
                <body style="font-size:12px; font-family:Tahoma;">
                <?php echo @$_SESSION['portal_website_style_' . $this->mod . '_close_info'] ?>
                </body>
                </html> 
                <?php
				exit;	
			} 
		}  
	} 
	
	public function comment_vote_save()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
			
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('please_login') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}
		
		if(empty($_POST['a']) || empty($_POST['info_id']) || empty($_POST['info_type']) || empty($_POST['info_menu']) || empty($_POST['redirect']))
		{
			?>
            <script>
			window.history.back();
			</script>
            <?php
			exit;	
		} 
   
		$a = $CustomHelper->input_post('a', TRUE);  
		$info_id = $CustomHelper->input_post('info_id', TRUE);  
		$info_type = $CustomHelper->input_post('info_type', TRUE);  
		$info_menu = $CustomHelper->input_post('info_menu', TRUE);  
		$redirect = $CustomHelper->input_post('redirect', TRUE);     
		
		if(@$_SESSION['comment_vote_'.$this->mod.'_'.$info_id] == 1)
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('you_already_vote') ?>');
			window.history.back();
			</script>
            <?php
			exit;	 
		}
 
		$this_model_vote = ''; 
		if($info_type == 'texteditor')
		{
			if($info_menu == 'main')
			{
				$this_model_vote = 'Portal_website_main_menu_page_model'; 
			}
			if($info_menu == 'sub')
			{
				$this_model_vote = 'Portal_website_page_model'; 
			}	
			if($info_menu == 'top')
			{
				$this_model_vote = 'Portal_website_top_menu_page_model'; 	
			}
			if($info_menu == 'footer')
			{
				$this_model_vote = 'Portal_website_footer_menu_page_model'; 	
			}
		}
		else
		{
			if($info_type == 'url')
			{
				exit;
			}
			if($info_type == 'news')
			{
				$this_model_vote = 'Portal_website_news_model'; 
			}
			if($info_type == 'calendar')
			{
				$this_model_vote = 'Portal_website_activities_model'; 
			}
			if($info_type == 'faq')
			{
				$this_model_vote = 'Portal_website_faq_model'; 
			}
			if($info_type == 'gallery')
			{
				$this_model_vote = 'Portal_website_gallery_model'; 
			}
			if($info_type == 'banner')
			{
				$this_model_vote = 'Portal_website_banner_model'; 
			}
			if($info_type == 'download')
			{
				$this_model_vote = 'Portal_website_download_model'; 
			}
			if($info_type == 'question')
			{
				$this_model_vote = 'Portal_website_question_model'; 
			}
			if($info_type == 'poll')
			{
				$this_model_vote = 'Portal_website_poll_model'; 
			}
			if($info_type == 'webboard')
			{
				$this_model_vote = 'Portal_website_webboard_model'; 
			} 
		} 

		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_vote)." WHERE web_id = ? AND id = '".$info_id."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_vote)),$q,$v);
		$q = json_decode($res);
		$r = $q; 
		 
 

		$d = new \stdClass();
		if($a == 'N')
		{
			$d->vote_bad = $r[0]->vote_bad + 1;
		}
		if($a == 'Y')
		{
			$d->vote_good = $r[0]->vote_good + 1;
		}  
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1); 	
		$q = "UPDATE ".$CustomHelper->model_to_table($this_model_vote)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_vote)),$q,$v);
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('vote_complete') ?>');
		window.history.back();
		</script>
		<?php
		$_SESSION['comment_vote_'.$this->mod.'_'.$info_id] = 1;
		exit; 
	}
	
	public function comment_vote_sub_save($id,$var1)
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header(); 
		 
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
			
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('please_login') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}
		 
		   
		 
		if(@$_SESSION['comment_vote_sub_'.$this->mod.'_'.$id] == 1)
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('you_already_vote') ?>');
			window.history.back();
			</script>
            <?php
			exit;	 
		}

		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_comment_model')." WHERE web_id = ? AND id = '".$id."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_comment_model')),$q,$v);
		$q = json_decode($res);	
		$r = $q;
		 
		$d = new \stdClass(); 
		
		if($var1 == 'n')
		{
			$d->vote_bad = $r[0]->vote_bad + 1;
		}
		else if($var1 == 'y')
		{
			$d->vote_good = $r[0]->vote_good + 1;
		}  	
		else
		{
			exit;	
		}
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1); 
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_main_comment_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".$id."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_comment_model')),$q,$v);
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('vote_complete') ?>');
		window.history.back();
		</script>
		<?php
		$_SESSION['comment_vote_sub_'.$this->mod.'_'.$id] = 1; 
		
		exit; 
	}
	
	public function comment_vote_sub_del_save($id)
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;

		$this->include_header(); 
		 
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
			
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('please_login') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}
		


		$d = new \stdClass(); 
		$d->status = 2;
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1); 
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_main_comment_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".$id."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_comment_model')),$q,$v); 
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('delete_report_complete') ?>');
		window.history.back();
		</script>
		<?php  
		exit; 
	}
	
	public function comment_message_save()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
			
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('please_login') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}
		
		if(empty($_POST['comment']) || empty($_POST['captcha']) || empty($_POST['main_type']) || empty($_POST['this_id']))
		{
			?>
            <script>
			window.history.back();
			</script>
            <?php
			exit;	
		} 
		
		$captcha = $_POST['captcha'];
		$captchaHash = $_POST['captchaHash'];
	 
		if($CustomHelper->check_hash($captcha) == $captchaHash)
		{
			
		}
		else
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('code_is_invalid') ?>');
            window.history.back();
            </script>
            <?php 
			exit;
		} 
		  
		$comment = $CustomHelper->input_post('comment', TRUE);  
		$main_type = $CustomHelper->input_post('main_type', TRUE);  
		$this_id = $CustomHelper->input_post('this_id', TRUE);  
	 	  
		$d = new \stdClass(); 
		$d->web_id = $_SESSION['portal_website_'.$this->mod.'_id'];  
		$d->main_type = $main_type; 
		$d->this_id = $this_id;  
		$d->title = nl2br($comment);
		$d->post_user = $_SESSION['login_'.$this->mod.'_title'] . ' ' . $_SESSION['login_'.$this->mod.'_lastname']; 
		$d->post_id = $_SESSION['login_'.$this->mod.'_id']; 
		$d->ip = $_SERVER['REMOTE_ADDR']; 
		$d->vote_good = '0';
		$d->vote_bad = '0';  
		$d->last_update = date('U');  
		$d->last_create = date('U'); 
		$d->status = '1';
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_comment_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_main_comment_model')." SET ".$this_qr."",'');   
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('send_message_complete') ?>');
		window.location = '<?php echo $_POST['url'] ?>';
		</script>
		<?php 
		exit; 
	}
	
	public function contact()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		  
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = 'ติดต่อเรา' . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('contact_us') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_contact']; 
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_contactus_sub_model')." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_contactus_sub_model')),$q,$v);
		$q = json_decode($res);

		$data['r_sub'] = $q;
		 
		return view('contact-main', $data);    
	}

	public function coverpages()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('contact_us') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('contact_us') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_contact'];  
		return view('coverpage', $data);    
	}
	
	public function contact_save()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		 
		$title = $CustomHelper->input_post('title', TRUE);
		$info = $CustomHelper->input_post('info', TRUE);  
		$contact_name = $CustomHelper->input_post('contact_name', TRUE);  
		$contact_email = $CustomHelper->input_post('contact_email', TRUE);  
		$contact_address = $CustomHelper->input_post('contact_address', TRUE);  
		$contact_tel = $CustomHelper->input_post('contact_tel', TRUE);  
		
		$captcha = $_POST['captcha'];
		$captchaHash = $_POST['captchaHash'];
	 
		if($CustomHelper->check_hash($captcha) == $captchaHash)
		{
			
		}
		else
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('code_is_invalid') ?>');
            window.history.back();
            </script>
            <?php 
			exit;
		} 
		  
		$d = new \stdClass(); 
		$d->web_id = $_SESSION['portal_website_'.$this->mod.'_id']; 
		
		$d->title = $title; 
		$d->info = $info; 
		$d->contact_name = $contact_name; 
		$d->contact_email = $contact_email; 
		$d->contact_address = $contact_address; 
		$d->contact_tel = $contact_tel;  
		$d->last_create = date('U'); 
		$d->ip = $_SERVER['REMOTE_ADDR'];		

		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_contactus_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_contactus_model')." SET ".$this_qr."",''); 

		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('send_information_complete') ?>');
		window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>';
		</script>
		<?php
		exit; 	
	}

	public function edit_profile()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		 
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('edit_profile') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('edit_profile') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_member'];  
		
		
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
           
		}
		else
		{
			 ?>
			<script> 
            window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>/login';
            </script> 	
            <?php
			exit;	
		}
		  
		$data['login_title'] = $_SESSION['login_'.$this->mod.'_title']; 
		$data['login_lastname'] = $_SESSION['login_'.$this->mod.'_lastname']; 
		$data['login_username'] = $_SESSION['login_'.$this->mod.'_username'];  
		$data['login_email'] = $_SESSION['login_'.$this->mod.'_email']; 
		$data['login_gender'] = $_SESSION['login_'.$this->mod.'_gender']; 
		$data['login_birthday'] = $_SESSION['login_'.$this->mod.'_birthday']; 
		$data['login_tel'] = $_SESSION['login_'.$this->mod.'_tel']; 
		$data['login_address'] = $_SESSION['login_'.$this->mod.'_address']; 
		$data['login_zip_code'] = $_SESSION['login_'.$this->mod.'_zip_code']; 
		$data['login_province'] = $_SESSION['login_'.$this->mod.'_province']; 
		$data['login_idcard'] = $_SESSION['login_'.$this->mod.'_idcard'];  
		$data['login_img1'] = $_SESSION['login_'.$this->mod.'_img1']; 
  
		return view('portal/page-edit-profile', $data);    
	}
	
	public function edit_profile_save()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
           
		}
		else
		{
			 ?>
			<script> 
            window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>/login';
            </script> 	
            <?php
			exit;	
		} 
 
		$change_password = @$CustomHelper->input_post('change_password', TRUE);  
		if($change_password == 1)
		{
			$password = $CustomHelper->input_post('password', TRUE);  
		}
 		$email = $CustomHelper->input_post('email', TRUE);  
		$title = $CustomHelper->input_post('name', TRUE);  
		$lastname = $CustomHelper->input_post('lastname', TRUE);  
		$gender = $CustomHelper->input_post('gender', TRUE);    
		$tel = $CustomHelper->input_post('tel', TRUE);  
		$address = $CustomHelper->input_post('address', TRUE);  
		$zip_code = $CustomHelper->input_post('zip_code', TRUE);  
		$province = $CustomHelper->input_post('province', TRUE);  
		$idcard = $CustomHelper->input_post('idcard', TRUE);  
		
		$captcha = $_POST['captcha'];
		$captchaHash = $_POST['captchaHash'];
 
		if($CustomHelper->check_hash($captcha) == $captchaHash)
		{
			
		}
		else
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('code_is_invalid') ?>');
            window.history.back();
            </script>
            <?php 
			exit;
		} 
 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND email = '".$email."' AND id <> ".$_SESSION['login_'.$this->mod.'_id'];	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
		$q = json_decode($res);
 
		if(count($q) > 0)
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('email_already_exist') ?>');
            window.history.back();
            </script>
            <?php
            exit; 
		}
		  
		$d = new \stdClass();  
		$d->title = $title;  
		$d->lastname = $lastname;  
		$change_password = @$CustomHelper->input_post('change_password', TRUE);  
		if($change_password == 1)
		{
			$d->password = md5($password); 
		} 
		$d->email = $email;   
		$d->gender = $gender;   
		$d->tel = $tel; 
		$d->address = $address; 
		$d->zip_code = $zip_code;  
		$d->province = $province; 
		$d->idcard = $idcard;   
		$d->last_update = date('U');
		 
		$config['upload_path']	 = './upload/web/';
		$config['allowed_types'] = UPLOAD_FILE_TYPE;
		$config['max_size']		 = UPLOAD_FILE_SIZE;   
		 
		$this_file = '';
		
		if($_FILES['img1']['tmp_name'] <> '')
		{
			/*$this->load->library('upload', $config);
			 
			if(!$this->upload->do_upload('img1'))
			{
				exit;
			}
			else
			{
				$arr = $this->upload->data();   
				$this_file = $arr['file_name'];
				 
				$this->load->library('ftp'); 
				$config['hostname'] = FTP_HOST;
				$config['username'] = FTP_USERNAME;
				$config['password'] = FTP_PASSWORD;
				$config['debug']	= FTP_DEBUG; 
				$this->ftp->connect($config); 
				$this->ftp->upload($config['upload_path'].$this_file, FTP_PATH.'upload/web/'.$this_file, 'binary', 0775); 
				$this->ftp->close();
				 
				
				$d->img1 = $this_file;   
			} */	
		}
		 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1); 	
		$q = "UPDATE ".$CustomHelper->model_to_table($this_model_vote)." SET ".$this_qr." WHERE web_id = ? AND id = '".$_SESSION['login_'.$this->mod.'_id']."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_vote)),$q,$v);  
	}

	public function email_save()
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;

		$this->include_header();  
		 
		$email = $CustomHelper->input_post('email', TRUE);  
		
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{ 
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_enew_model')." WHERE web_id = ? AND title = '".$email."' AND id <> ".$_SESSION['login_'.$this->mod.'_id'];	 	
			$v = $_SESSION['portal_website_'.$this->mod.'_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_enew_model')),$q,$v);
			$q = json_decode($res);
			
			if(count($q) > 0)
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $TextLanguage->lang('email_already_exist') ?>');
				window.history.back();
				</script>
				<?php
				exit; 	
			}
			else
			{  
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_enew_cat_model')." WHERE web_id = ? AND title = '".$email."' AND id <> ".$_SESSION['login_'.$this->mod.'_id'];	 	
				$v = $_SESSION['portal_website_'.$this->mod.'_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_enew_cat_model')),$q,$v);
				$q = json_decode($res);
				if(count($q) == 0)
				{ 
					$d = new \stdClass(); 
					$d->web_id = $_SESSION['portal_website_'.$this->mod.'_id']; 
					$d->title = 'เว็บไซต์';
					$d->en_title = 'Website'; 
					$d->last_create = date('U');
					$d->last_update = date('U');
					$d->sort = '1';
					$d->status= '1';
					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  	 
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_enew_cat_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_enew_cat_model')." SET ".$this_qr."",''); 
				} 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_enew_cat_model')." WHERE web_id = ? AND title = '".$email."' AND id <> ".$_SESSION['login_'.$this->mod.'_id'].' ORDER BY id ASC';	 	
				$v = $_SESSION['portal_website_'.$this->mod.'_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_enew_cat_model')),$q,$v);
				$q = json_decode($res);
				$r = $q; 
				$this_enew_id = $r[0]->id;
  
				$d = new \stdClass(); 
				$d->web_id = $_SESSION['portal_website_'.$this->mod.'_id']; 
				$d->cat_id = $this_enew_id;
				$d->title = $email; 
				$d->last_create = date('U');
				$d->last_update = date('U');
				$d->sort = '1';
				$d->status= '1';

				$this_qr = ''; 
				foreach($d as $key=>$value) 
				{
					$this_qr = $this_qr.$key." = '".addslashes($value)."',";
				}
				$this_qr = substr($this_qr,0,-1);  	 
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_enew_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_enew_model')." SET ".$this_qr."",'');  
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $TextLanguage->lang('subscribe_complete') ?>');
				window.history.back();
				</script>
				<?php
				exit; 	
			} 
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('email_is_invalid_format') ?>');
			window.history.back();
			</script>
            <?php
			exit; 
		}
	}

	public function forgot_password()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('forgot_password') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('forgot_password') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_member'];  
		return view('portal/page-forgot_password', $data);    
	}
	
	public function forgot_password_save()
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		$email = $CustomHelper->input_post('email', TRUE);
		
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND email = '".$email."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
		$q = json_decode($res);
 
		if(count($q) == 0)
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('email_not_found') ?>');
            window.history.back();
            </script>
            <?php
            exit; 	
		} 


		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND email = '".$email."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
		$q = json_decode($res);   	
		$r = $q;
		$new_password = "";

		/*
		$this->email->from($r[0]->email); 
		$this->email->bcc('anurakball@gmail.com');  
		$this->email->subject('' . $_SESSION['portal_website_'.$this->mod.'_web_name'] . ' : ลืมรหัสผ่าน');
		
		$new_password = rand(1111111,9999999);
		
		$info = '';
		$info = $info . 'คุณ' . $r[0]->title . ' ' . $r[0]->lastname . '<br><br>';
		$info = $info . 'ระบบได้ตั้งรหัสผ่านใหม่ให้ท่านแล้ว โดยมีรายละเอียดดังนี้<br>'; 
		$info = $info . 'Username : ' . $r[0]->username . '<br>';
		$info = $info . 'Password : ' . $new_password . '<br>';  
		
		echo $info;
		*/

		$d = new \stdClass(); 
		$d->password = $new_password;
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1); 	
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_member_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".$$r[0]->id."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
		 
		//$this->email->message($info);	 
	}
	
	public function fullcalendar($web_id,$cat_id,$page_id,$page_type)
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		 
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['web_id'] = $web_id;
		$data['cat_id'] = $cat_id;
		$data['page_id'] = $page_id;
		$data['page_type'] = $page_type;
		 
		return view('portal/fullcalendar', $data);    
	}

	public function iframe($page_type,$type_menu,$id)
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();

		$data['mod'] = $this->mod; 
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		
		$this_type = '';  
		$this_model_main = '';  
		switch($type_menu)
		{
			case "top" :
				$this_model_main = 'Portal_website_top_menu_page_model';  
				$this_type = 'top';
				break;
			case "main_menu" :
				$this_model_main = 'Portal_website_main_menu_page_model';  
				$this_type = 'main';
				break;
			case "page" :
				$this_model_main = 'Portal_website_page_model';  
				$this_type = 'sub';
				break;
			case "footer" :
				$this_model_main = 'Portal_website_footer_menu_page_model';  
				$this_type = 'footer';
				break;
		}
 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_main)." WHERE web_id = ? AND id = '".$id."' sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_main)),$q,$v);
		$q = json_decode($res); 
		$r = $q;
		
		$data_id = $r[0]->data_id;
		   
		$this_page = '';  
		$this_model = ''; 
		$this_cat_id = 'cat_id'; 
		$this_order_by = '';
		
		switch($page_type)
		{
			case "banner" :
				$this_page = 'iframe_banner';
				$this_model = 'Portal_website_banner_model';   
				
				$this_order_by = 'sort ASC';
				break;	
			case "calendar" :
				$this_page = 'iframe_calendar';
				if($_SESSION['portal_website_' . $this->mod . '_id'] == "353")
				{
					$this_page = 'iframe_calendar_covid';
				} 
				$this_model = 'Portal_website_activities_model';  
				$data['web_id'] = $_SESSION['portal_website_' . $this->mod . '_id'];
				$data['cat_id'] = $data_id;
				$data['page_id'] = $id;
				$data['page_type'] = $this_type;
				$this_order_by = 'sort ASC';   
				break;	
			case "download" :
				$this_page = 'iframe_download';
				$this_model = 'Portal_website_download_model';
				$this_order_by = 'sort ASC';   
				break;	
			case "faq" :
				$this_page = 'iframe_faq';
				$this_model = 'Portal_website_faq_model'; 
				$this_order_by = 'sort ASC';  
				break;	
			case "gallery" :
				$this_page = 'iframe_gallery';
				$this_model = 'Portal_website_gallery_model';  
				$this_order_by = 'sort ASC'; 
				break; 
			case "news" :
				$this_page = 'iframe_news';
				$this_model = 'Portal_website_news_model';
				$this_order_by = 'sort DESC';
				break;	
			case "poll" :
				$this_page = 'iframe_poll';
				$this_model = 'Portal_website_poll_model';
				$this_order_by = 'id DESC'; 		
				break;	
			case "question" :
				$this_page = 'iframe_question';
				$this_model = 'Portal_website_question_model';
				$this_order_by = 'sort ASC';
				break;	
			case "texteditor" :
				exit;
				break;	
			case "url" :
				exit;
				break;	
			case "webboard" :
				$this_page = 'iframe_webboard';
				$this_model = 'Portal_website_webboard_model'; 
				$this_cat_id = 'room_id';
				$this_order_by = 'last_post_date DESC';
				break;	
			default :
				$this_page = '';
				exit;
				break;	
		}  

		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND ".$this_cat_id." = '".$data_id."' LIMIT 0,5 ORDER BY ".$this_order_by;	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
		$q = json_decode($res); 
  
		$data['data_info'] = $q;
		$data['data_page_id'] = $id; 
		$data['data_page_type'] = $this_type;
		$data['data_page_title'] = $id;
  		
		if($page_type == 'poll') 
		{
			$sum = 0;
			
			$sum = $sum + $data['data_info'][0]->p1;
			$sum = $sum + $data['data_info'][0]->p2;
			$sum = $sum + $data['data_info'][0]->p3;
			$sum = $sum + $data['data_info'][0]->p4;
			$sum = $sum + $data['data_info'][0]->p5;
			$sum = $sum + $data['data_info'][0]->p6;
			$sum = $sum + $data['data_info'][0]->p7;
			$sum = $sum + $data['data_info'][0]->p8;
			$sum = $sum + $data['data_info'][0]->p9;
			$sum = $sum + $data['data_info'][0]->p10;
			
			$data['r_data_count_all'] = $sum;	
		}
 
		return view('portal/'.$this_page, $data); 	
	}

	public function iframe2($page_type,$type_menu,$id)
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;

		$this->include_header();

		$data['mod'] = $this->mod; 
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		
		$this_type = '';  
		$this_model_main = '';  
		switch($type_menu)
		{
			case "top" :
				$this_model_main = 'Portal_website_top_menu_page_model';  
				$this_type = 'top';
				break;
			case "main_menu" :
				$this_model_main = 'Portal_website_main_menu_page_model';  
				$this_type = 'main';
				break;
			case "page" :
				$this_model_main = 'Portal_website_page_model';  
				$this_type = 'sub';
				break;
			case "footer" :
				$this_model_main = 'Portal_website_footer_menu_page_model';  
				$this_type = 'footer';
				break;
		}


		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_main)." WHERE web_id = ? AND id = '".$id."' sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_main)),$q,$v);
		$q = json_decode($res); 
		$r = $q;
  
		$data_id = $r[0]->data_id;
		   
		$this_page = '';  
		$this_model = ''; 
		$this_cat_id = 'cat_id'; 
		$this_order_by = '';
		
		switch($page_type)
		{
			case "banner" :
				$this_page = 'iframe_banner';
				$this_model = 'Portal_website_banner_model';   
				
				$this_order_by = 'sort ASC';
				break;	
			case "calendar" :
				$this_page = 'iframe_calendar';
				$this_model = 'Portal_website_activities_model';  
				$data['web_id'] = $_SESSION['portal_website_' . $this->mod . '_id'];
				$data['cat_id'] = $data_id;
				$data['page_id'] = $id;
				$data['page_type'] = $this_type;
				$this_order_by = 'sort ASC';   
				break;	
			case "download" :
				$this_page = 'iframe_download';
				$this_model = 'Portal_website_download_model';
				$this_order_by = 'sort ASC';   
				break;	
			case "faq" :
				$this_page = 'iframe_faq';
				$this_model = 'Portal_website_faq_model'; 
				$this_order_by = 'sort ASC';  
				break;	
			case "gallery" :
				$this_page = 'iframe_gallery';
				$this_model = 'Portal_website_gallery_model';  
				$this_order_by = 'sort ASC'; 
				break; 
			case "news" :
				$this_page = 'iframe_news2';
				$this_model = 'Portal_website_news_model';
				$this_order_by = 'sort DESC';
				break;	
			case "poll" :
				$this_page = 'iframe_poll';
				$this_model = 'Portal_website_poll_model';
				$this_order_by = 'id DESC'; 		
				break;	
			case "question" :
				$this_page = 'iframe_question';
				$this_model = 'Portal_website_question_model';
				$this_order_by = 'sort ASC';
				break;	
			case "texteditor" :
				exit;
				break;	
			case "url" :
				exit;
				break;	
			case "webboard" :
				$this_page = 'iframe_webboard';
				$this_model = 'Portal_website_webboard_model'; 
				$this_cat_id = 'room_id';
				$this_order_by = 'last_post_date DESC';
				break;	
			default :
				$this_page = '';
				exit;
				break;	
		}  
		

		$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND ".$this_cat_id." = '".$data_id."' LIMIT 0,5 ORDER BY ".$this_order_by;	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
		$q = json_decode($res); 
 
		$data['data_info'] = $q;
		$data['data_page_id'] = $id; 
		$data['data_page_type'] = $this_type;
		$data['data_page_title'] = $id;
  		
		if($page_type == 'poll') 
		{
			$sum = 0;
			
			$sum = $sum + $data['data_info'][0]->p1;
			$sum = $sum + $data['data_info'][0]->p2;
			$sum = $sum + $data['data_info'][0]->p3;
			$sum = $sum + $data['data_info'][0]->p4;
			$sum = $sum + $data['data_info'][0]->p5;
			$sum = $sum + $data['data_info'][0]->p6;
			$sum = $sum + $data['data_info'][0]->p7;
			$sum = $sum + $data['data_info'][0]->p8;
			$sum = $sum + $data['data_info'][0]->p9;
			$sum = $sum + $data['data_info'][0]->p10;
			
			$data['r_data_count_all'] = $sum;	
		}
		 
		return view('portal/'.$this_page, $data); 	
	}
	 
	public function include_lang()
	{
		//$this->lang->load('portal',$_SESSION["portal_lang"]); 
	}

	public function ita()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('ita') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('contact_us') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_texteditor'];  
		return view('ita-page', $data);    
	}
	 
	public function json_events($web_id = '0',$cat_id = '0',$page_id = '0',$page_type = '')
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		 
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		
		$data['web_id'] = $web_id;
		$data['cat_id'] = $cat_id;
		

		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_activities_model')." WHERE web_id = ? AND status = '1' AND  cat_id = '".$cat_id."' sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_activities_model')),$q,$v);
		$q = json_decode($res); 
 
		$data['data_id'] = $q;
		 
		$data['r_page_id'] = $page_id;  
		$data['r_page_type'] = $page_type;  
		  
		return view('portal/json-events', $data);    
	}
	 
	public function lang($v1 = 'english')
	{ 
		$_SESSION["portal_lang"] = $v1;
		
		/*if(isset($_GET['back']))
		{
			$get_back = md5($_GET['back']);
			@unlink('application/cache/'.$get_back);
		}*/
		?>
        <meta http-equiv="refresh" content="0;URL=<?php echo $_GET['back'] ?>"> 
        <?php
		exit;
	}
	
	public function login($redirect = '')
	{    
		/*
		$this->include_header();  
		 
		
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
            ?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('you_already_login') ?>');
            window.history.back();
            </script> 	
            <?php
			exit;
		}
		 
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('login') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('login') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_member'];  
		$data['redirect'] = $redirect;
		return view('portal/page-login', $data);    
		*/
		
		?>
        <script> 
		window.location = 'http://www.bangkok.go.th/main/member-login.php';
		</script>
        <?php
		exit;
	}
	
	public function login_save()
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		  
		$u = $CustomHelper->input_post('u', TRUE);  
		$p = $CustomHelper->input_post('p', TRUE);   
		$redirect = $CustomHelper->input_post('redirect', TRUE);  
		

		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND username = '".$u."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
		$q = json_decode($res); 
 
		if(count($q) > 0)
		{
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND username = '".$u."'";	 	
			$v = $_SESSION['portal_website_'.$this->mod.'_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
			$q = json_decode($res);  
			$r = $q;
			
			if($r[0]->password == md5($p))
			{
				$_SESSION['login_'.$this->mod.'_pass'] = '1';
				$_SESSION['login_'.$this->mod.'_id'] = $r[0]->id; 
				$_SESSION['login_'.$this->mod.'_title'] = $r[0]->title; 
				$_SESSION['login_'.$this->mod.'_lastname'] = $r[0]->lastname; 
				$_SESSION['login_'.$this->mod.'_username'] = $r[0]->username; 
				$_SESSION['login_'.$this->mod.'_email'] = $r[0]->email; 
				$_SESSION['login_'.$this->mod.'_gender'] = $r[0]->gender; 
				$_SESSION['login_'.$this->mod.'_birthday'] = $r[0]->birthday; 
				$_SESSION['login_'.$this->mod.'_tel'] = $r[0]->tel; 
				$_SESSION['login_'.$this->mod.'_address'] = $r[0]->address; 
				$_SESSION['login_'.$this->mod.'_zip_code'] = $r[0]->zip_code; 
				$_SESSION['login_'.$this->mod.'_province'] = $r[0]->province; 
				$_SESSION['login_'.$this->mod.'_idcard'] = $r[0]->idcard; 
				$_SESSION['login_'.$this->mod.'_img1'] = $r[0]->img1; 
				 
				if(strlen($redirect) > 3)
				{
					?>
					<script> 
					window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>/<?php echo $redirect ?>';
					</script>
					<?php
					exit; 		
				}
				else if(strlen(@$_SESSION['login_'.$this->mod.'_redirect']) > 3)
				{ 
					?>
					<script> 
					window.location = '<?php echo $_SESSION['login_'.$this->mod.'_redirect'] ?>';
					</script>
					<?php
					$_SESSION['login_'.$this->mod.'_redirect'] = '';
					unset($_SESSION['login_'.$this->mod.'_redirect']);
					exit;
				}
				else
				{
					?>
					<script> 
					window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>';
					</script>
					<?php
					exit; 		
				}
			}
			else
			{
				?><meta charset="utf-8" />
				<script>
				alert('<?php echo $TextLanguage->lang('username_or_password_invalid') ?>');
				window.history.back();
				</script>
				<?php
				exit; 	
			}
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('username_or_password_invalid') ?>');
			window.history.back();
			</script>
            <?php
			exit; 	
		}
	}
	
	public function logout($redirect = '')
	{
		unset($_SESSION['login_'.$this->mod.'_pass']);
		unset($_SESSION['login_'.$this->mod.'_title']);
		unset($_SESSION['login_'.$this->mod.'_lastname']);
		unset($_SESSION['login_'.$this->mod.'_username']);
		unset($_SESSION['login_'.$this->mod.'_email']);
		unset($_SESSION['login_'.$this->mod.'_gender']);
		unset($_SESSION['login_'.$this->mod.'_birthday']);
		unset($_SESSION['login_'.$this->mod.'_tel']);
		unset($_SESSION['login_'.$this->mod.'_address']);
		unset($_SESSION['login_'.$this->mod.'_zip_code']);
		unset($_SESSION['login_'.$this->mod.'_province']);
		unset($_SESSION['login_'.$this->mod.'_idcard']); 
		unset($_SESSION['member_login']);
		unset($_SESSION['member_id']);
		unset($_SESSION['member_name']);
		unset($_SESSION['member_lastname']);
		unset($_SESSION['member_user']);
		unset($_SESSION['member_email']);
		unset($_SESSION['member_sex']);
		unset($_SESSION['member_birthday']);
		unset($_SESSION['member_tel']);
		unset($_SESSION['member_addr']);
		unset($_SESSION['member_postal']);
		unset($_SESSION['member_province_id']);
		unset($_SESSION['member_idcard']);
		unset($_SESSION['member_img']); 
		
		if(strlen($redirect) > 3)
		{
			?>
			<script> 
			window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>/<?php echo $redirect ?>';
			</script>
			<?php
			exit; 		
		}
		else
		{
			?>
			<script> 
			window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>';
			</script>
			<?php
			exit; 		
		}
	}

	public function organization()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('organize') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('contact_us') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_organize'];    

		$q = "SELECT organize_data FROM ".$CustomHelper->model_to_table('Portal_website_style_model')." WHERE web_id = ?";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_style_model')),$q,$v);
		$q = json_decode($res);

		$data['this_data'] = $q;


		return view('organization', $data);    
	}
	
	public function page($type,$v1 = '0',$title = '',$page = '',$action = '',$info_id = '',$info_title = '')
	{   
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 

		$this_manage = 'main_menu';
		  
		if($type == 'sub')
		{
			$setting_model = 'Portal_website_page_model';
			$this_manage = 'page';	
		}
		else if($type == 'main')
		{
			$setting_model = 'Portal_website_main_menu_page_model';	
			$this_manage = 'main_menu';
		}
		else if($type == 'top')
		{
			$setting_model = 'Portal_website_top_menu_page_model';
			$this_manage = 'top_menu';	
		}
		else if($type == 'footer')
		{
			$setting_model = 'Portal_website_footer_menu_page_model';
			$this_manage = 'footer_menu';	
		}
		else 
		{
			?>
			<meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/<?php echo $this->mod ?>" />
			<?php
			exit; 
		}
 
		$this->include_header();  
		 
		$data['mod'] = $this->mod;  
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id']; 

		$q = "SELECT * FROM ".$CustomHelper->model_to_table($setting_model)." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($setting_model)),$q,$v);
		$q = json_decode($res);
  
		if(count($q) > 0)
		{ 
		 
		}
		else
		{
			?>
			<meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/<?php echo $this->mod ?>" />
			<?php
			exit; 
		}
		
		$r = $q;
		
		/*
		if($r[0]->status == '0')
		{
			?>
			<meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/<?php echo $this->mod ?>" />
			<?php
			exit; 	
		}
		*/
		
		if($r[0]->date_set == '1')
		{
			if($r[0]->date_start < date('U') && $r[0]->date_end > date('U'))
			{
						
			} 
			else
			{
				?>
				<meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/<?php echo $this->mod ?>" />
				<?php
				exit; 
			}
		}

		$q = "UPDATE ".$CustomHelper->model_to_table($setting_model)." SET click_view = '".($r[0]->click_view+1)."' WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($setting_model)),$q,$v);
		$q = json_decode($res);
 
		$data['title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title) . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name'];
		$data['main_bg'] = '';
 
		$str_navi = '';
		$str_navi_main = '';
		if($type == 'sub')
		{       
			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? AND id = '".$r[0]->cat_id."'";	 	
			$v = $_SESSION['portal_website_' . $this->mod . '_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
			$q = json_decode($res); 
			$ro_check = $q;	
			
			$str_navi_main = '<li class="current"><a href="#">' . $CustomHelper->L($ro_check[0]->title,$ro_check[0]->en_title) . '</a></li> ';
			 
			if($r[0]->page_id > 0)
			{  
				$start_loop = true;
				$this_id = $r[0]->page_id;
				$this_run = 1;
				while($start_loop)
				{
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($setting_model)." WHERE web_id = ? AND id = '".$this_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($setting_model)),$q,$v);
					$q = json_decode($res);     
					$ro = $q;	
					 
					/*if($this_run == 1)
					{
						$str_navi = '<li class="current"><a href="#">' . $ro[0]->title . '</a> </li>' . $str_navi;	
					}
					else
					{
						$str_navi = '<li><a href="' . "http://127.0.0.1:8000/" . $this->mod . '/page/' . $type . '/' . $ro[0]->id . '">' . $ro[0]->title . '</a>&nbsp;</li>' . $str_navi;	
					}*/
					
					$str_navi = '<li><a href="' . "http://127.0.0.1:8000/" . $this->mod . '/page/' . $type . '/' . $ro[0]->id . '">' . $CustomHelper->L($ro[0]->title,$ro[0]->en_title) . '</a>&nbsp;</li>' . $str_navi;	
					 
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
				
				$str_navi = $str_navi . '<li class="current"><a href="#">' . $CustomHelper->L($r[0]->title,$r[0]->en_title) . '</a> </li>';
			}
			else
			{
				$str_navi = '<li class="current"><a href="#">' . $CustomHelper->L($r[0]->title,$r[0]->en_title) . '</a> </li>' . $str_navi;	
			}
		}
		else
		{
			$str_navi = '<li class="current"><a href="#">' . $CustomHelper->L($r[0]->title,$r[0]->en_title) . '</a> </li>' . $str_navi;	
		} 
		$data['list_str_navi'] = $str_navi_main.$str_navi;  
		$data['this_page_type'] = $type;
		$data['this_manage'] = $this_manage;
 
		switch($r[0]->page_type)
		{
			case "banner" :
			
				$this_model = 'Portal_website_banner_model';
				$this_model_cat = 'Portal_website_banner_cat_model'; 
				
				if($action == 'info')
				{ 
					$can_pass = false;
					
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);      
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					} 
					if($can_pass)
					{
						
					}
					else
					{ 
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;	
					}

					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);  					  
					$r_news_info = $q; 

					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title);  
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page;

					 
					$d = new \stdClass(); 
					$d->click_view = $r_news_info[0]->click_view+1;  

					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1); 	
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 
					?>
                    <meta http-equiv="refresh" content="0;URL=<?php echo $CustomHelper->L($r_news_info[0]->url,$r_news_info[0]->en_url) ?>" />
                    <?php
					exit; 	
				}
				else
				{ 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_banner']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 9999;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					}  
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
					  
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
					 
					if(@$_POST['start_search'] == '1')
					{
						if(isset($_POST['reset']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
							
							if(isset($_POST['cat']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
							} 
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							}
							
							if(isset($_POST['mod_search']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							} 
						} 
					}
					
					$qr_like = '';
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{
						$qr_like = " AND title LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%'"; 
					} 
 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? ".$qr_like." AND status = '1' AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$total_rows = json_decode($res);  
					$total_pages = ceil(count($total_rows)/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1; 
					 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? ".$qr_like." AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows'];	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$data['r_data'] = json_decode($res);
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res);  	
 
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
					 
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 

					/*echo '<pre>';
					print_r($data);
					exit;*/
					 
					return view('bannerlink-main', $data);  	
				}
				
				break;
			
			case "calendar" :
			
				$this_model = 'Portal_website_activities_model';
				$this_model_cat = 'Portal_website_activities_cat_model'; 
				
				if($action == 'info')
				{ 
					$can_pass = false;
 
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);   
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;	
					}
					 
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);
   
					$data['r_news_info'] = $q; 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_activities']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);  
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title);  
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page;
					 
					$r_new_info = $q;
 
					$d = new \stdClass(); 
					$d->click_view = $r_new_info[0]->click_view+1;  
					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 



					
					$data['r_click_view'] = $r_new_info[0]->click_view;
					$data['r_id'] = $r_new_info[0]->id; 
					$data['r_type'] = 'calendar';
					$data['r_menu'] = 'calendar'; 
					$data['r_vote_bad'] = $r_new_info[0]->vote_bad;
					$data['r_vote_good'] = $r_new_info[0]->vote_good;
					$data['r_menu_id'] = $v1;
					
					if($r_new_info[0]->can_review == '1')
					{
						$comment_model = 'Portal_website_main_comment_model'; 

						$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE main_type = 'calendar' AND web_id = ? AND this_id = '".$info_id."' ORDER BY id ASC";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
						$r_this = json_decode($res);	  
						$data['list_comment'] = $r_this;
						$r_loop = $r_this; 
						foreach($r_loop as $ro)
						{ 
							$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND id = '".$ro->post_id."' ORDER BY id ASC";	 	
							$v = $_SESSION['portal_website_' . $this->mod . '_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
							$r_this = json_decode($res);  
							$ro_this = $r_this;
							$data['list_comment_photo'][$ro->id] = $ro_this[0]->img1; 
						}   
					}
					
					return view('calendar-detail', $data); 
				}
				else
				{ 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_activities']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;   
					$data['r_data_web_id'] = $_SESSION['portal_website_' . $this->mod . '_id'];
					$data['r_data_cat_id'] = $_SESSION[$this->mod.'_'.$v1.'_group'];  
 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_activities_model')." WHERE web_id = ? AND status = '1' AND  cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' ORDER BY sort ASC";	
					 
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_activities_model')),$q,$v);
					$q = json_decode($res); 
			
					$data['data_id'] = $q;
					  
					return view('calendar-main', $data); 
					
				}
				
				break;
			
			case "download" :
			
				$this_model = 'Portal_website_download_model';
				$this_model_cat = 'Portal_website_download_cat_model'; 
				
				if($action == 'info')
				{ 
					$can_pass = false;
					
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);   
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;
					}

					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$data['r_news_info'] = $q;  
					$r_new_info = $q;

					$d = new \stdClass(); 
					$d->click_view = $r_new_info[0]->click_view+1;  
					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 
					?>
                    <meta http-equiv="refresh" content="0;URL=<?php echo $CustomHelper->L($r_new_info[0]->file1,$r_new_info[0]->en_file1) ?>" />
                    <?php
					exit;	
				}
				else
				{ 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_download']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title); 
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;  
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 20;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					} 
					
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
					  
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
					 
					if(@$_POST['start_search'] == '1')
					{
						if(isset($_POST['reset']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
							
							if(isset($_POST['cat']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
							} 
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							}
							
							if(isset($_POST['mod_search']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							}
							
							if(isset($_POST['date_start']) && isset($_POST['date_end']))
							{
								if($_POST['date_start'] <> '' && $_POST['date_end'] <> '')

								{
									$a = explode('-',$CustomHelper->input_post('date_start', TRUE));
									$b = explode('-',$CustomHelper->input_post('date_end', TRUE));
									 
									$_SESSION[$this->mod.'_'.$v1.'_date_start'] = mktime(0,0,0,(int)$a[1],(int)$a[0],(int)$a[2]);
									$_SESSION[$this->mod.'_'.$v1.'_date_end'] = mktime(23,59,59,(int)$b[1],(int)$b[0],(int)$b[2]);	
								} 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
								$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
							} 	
						} 
					}


					$w1 = '';
					if($_SESSION[$this->mod.'_'.$v1.'_date_start'] <> '' && $_SESSION[$this->mod.'_'.$v1.'_date_end'] <> '')
					{					
						$w1 = " AND web_id = '".$_SESSION['portal_website_' . $this->mod . '_id']."' AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' AND date_news >= '".$_SESSION[$this->mod.'_'.$v1.'_date_start']."' AND date_news <= '".$_SESSION[$this->mod.'_'.$v1.'_date_end']."'";  
					} 
					else
					{
						$w1 = " AND web_id = '".$_SESSION['portal_website_' . $this->mod . '_id']."' AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1'";  
					}
					
					$w2 = '';
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{
						$w2 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%' "; 
					}   
 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1." ".$w2;	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$total_rows = json_decode($res); 
					$total_pages = ceil(count($total_rows)/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1." ".$w2." ORDER BY sort DESC LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows'];	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);  
					$data['r_data'] = $q;
					 


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res); 
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
					 
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
					 
					return view('download-main', $data);  	
				}
				
				break;
			
			case "faq" :
			
				$this_model = 'Portal_website_faq_model';
				$this_model_cat = 'Portal_website_faq_cat_model'; 
				
				$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_faq']; 
				$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
				$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
				$data['r_page_type'] = $type;
				$data['r_page_id'] = $v1; 
				$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group'];  
				
				if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 999;
				}  
				if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
				} 
				
				if($page <> '')
				{ 
					$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
				}
				  
				$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
				 
				if(@$_POST['start_search'] == '1')
				{
					if(isset($_POST['reset']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
					} 
					else
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
						
						if(isset($_POST['cat']))
						{
							
							
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
						}
						
						if(isset($_POST['mod_search']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
						}
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
						}
						
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
				}
				
				$w1 = "";
				if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
				{ 
					$w1 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%' ";
				} 


				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."'".$w1;	 	
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
				$q = json_decode($res);
 
				$total_rows = count($q);
				$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  




				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' ".$w1." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows'];	 	
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
				$q = json_decode($res); 
				$data['r_data'] = $q;



				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
				$q = json_decode($res); 
 
				$data['r_data_cat'] = $q;
				$data['r_data_cat_num_rows'] = count($q);
				 
				$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
				$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
				$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
				$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
				$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
				$data['r_data_title'] = $title;
				$data['r_data_total_pages'] = $total_pages+1; 
				$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
				 
				return view('faq-main', $data);  	
				
				break;
			
			case "gallery" :
			
				if($action == 'info')
				{
					$this_model = 'Portal_website_gallery_model';
					$this_model_cat = 'Portal_website_gallery_cat_model'; 
					
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_gallery']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					 
					$can_pass = false;
					 
					if($info_id <> '')
					{ 
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);  
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;	
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
  
					$data['r_news_info'] = $q;  
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title);  
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page; 
					$data['r_back'] = $this->mod.'/page/'.$type.'/'.$v1.'/'.$title.'/'.$page;
					
					$data['r_website_id'] = $_SESSION['portal_website_' . $this->mod . '_id']; 
					     
					return view('portal/page-gallery-inside', $data);  
				}
				else
				{ 
					$this_model = 'Portal_website_gallery_model';
					$this_model_cat = 'Portal_website_gallery_cat_model'; 
					
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_gallery']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;  
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 10;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					} 
					
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
					  
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
					  
					if(@$_POST['start_search'] == '1')
					{
						if(isset($_POST['reset']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
							
							if(isset($_POST['cat']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
							} 
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							}
							
							if(isset($_POST['mod_search']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							}
							
							if(isset($_POST['date_start']) && isset($_POST['date_end']))
							{
								if($_POST['date_start'] <> '' && $_POST['date_end'] <> '')
								{
									$a = explode('-',$CustomHelper->input_post('date_start', TRUE));
									$b = explode('-',$CustomHelper->input_post('date_end', TRUE));
									 
									$_SESSION[$this->mod.'_'.$v1.'_date_start'] = mktime(0,0,0,(int)$a[1],(int)$a[0],(int)$a[2]);
									$_SESSION[$this->mod.'_'.$v1.'_date_end'] = mktime(23,59,59,(int)$b[1],(int)$b[0],(int)$b[2]);	
								} 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
								$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
							} 	
						} 
					}


		

					$w1 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_date_start'] <> '' && $_SESSION[$this->mod.'_'.$v1.'_date_end'] <> '')
					{					
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' AND date_news >= '".$_SESSION[$this->mod.'_'.$v1.'_date_start']."' AND date_news <= '".$_SESSION[$this->mod.'_'.$v1.'_date_end']."'";  
					} 
					else
					{
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' "; 
					}
					
					$w2 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{
						$w2 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%' "; 
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2;	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
 
					$total_rows = count($q);
					$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows']."";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$data['r_data'] = $q;
					


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res);  
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
					 
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
					 
					return view('gallery-main', $data); 
				}
				 
				break;
			case "vdo" : 
				if($action == 'info')
				{
					$this_model = 'Portal_website_vdo_model';
					$this_model_cat = 'Portal_website_vdo_cat_model'; 
					
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_vdo']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
						
					$can_pass = false;
						
					if($info_id <> '')
					{ 
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);  
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;	
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
	
					$data['r_news_info'] = $q;  
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->en_title);  
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page; 
					$data['r_back'] = $this->mod.'/page/'.$type.'/'.$v1.'/'.$title.'/'.$page;
					
					$data['r_website_id'] = $_SESSION['portal_website_' . $this->mod . '_id']; 
							
					return view('portal/page-vdo-inside', $data);  
				}
				else
				{ 
					$this_model = 'Portal_website_vdo_model';
					$this_model_cat = 'Portal_website_vdo_cat_model'; 
					
					$data['main_bg'] = @$_SESSION['portal_website_all_bg_' . $this->mod . '_mod_vdo']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;  
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 10;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					} 
					
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
						
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
						
					if(@$_POST['start_search'] == '1')
					{
						if(isset($_POST['reset']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
							
							if(isset($_POST['cat']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
							} 
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							}
							
							if(isset($_POST['mod_search']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							}
							
							if(isset($_POST['date_start']) && isset($_POST['date_end']))
							{
								if($_POST['date_start'] <> '' && $_POST['date_end'] <> '')
								{
									$a = explode('-',$CustomHelper->input_post('date_start', TRUE));
									$b = explode('-',$CustomHelper->input_post('date_end', TRUE));
										
									$_SESSION[$this->mod.'_'.$v1.'_date_start'] = mktime(0,0,0,(int)$a[1],(int)$a[0],(int)$a[2]);
									$_SESSION[$this->mod.'_'.$v1.'_date_end'] = mktime(23,59,59,(int)$b[1],(int)$b[0],(int)$b[2]);	
								} 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
								$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
							} 	
						} 
					}


		

					$w1 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_date_start'] <> '' && $_SESSION[$this->mod.'_'.$v1.'_date_end'] <> '')
					{					
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' AND date_news >= '".$_SESSION[$this->mod.'_'.$v1.'_date_start']."' AND date_news <= '".$_SESSION[$this->mod.'_'.$v1.'_date_end']."'";  
					} 
					else
					{
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' "; 
					}
					
					$w2 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{
						$w2 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%' "; 
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2;	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
	
					$total_rows = count($q);
					$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows']."";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$data['r_data'] = $q;
					


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res);  
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
						
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
						
					return view('video-main', $data); 
				}
					
				break;	
			case "group" :
			 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table("Portal_website_page_model")." WHERE web_id = ? AND page_id = '".$r[0]->id."' AND page_type <> 'url'";	 	
				$v = $_SESSION['portal_website_'.$this->mod.'_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api("Portal_website_page_model")),$q,$v);
				$q = json_decode($res);   	
			 	$r_ex = $q;
				?>
                <meta http-equiv="refresh" content="0;URL=<?php echo "http://127.0.0.1:8000/" . $_SESSION['portal_website_' . $this->mod . '_web_url'] ?>/page/<?php echo $type ?>/<?php echo $r_ex[0]->id  ?>" />
                <?php
				exit;
				break; 
			
			case "news" :
			 
				$this_model = 'Portal_website_news_model';
				$this_model_cat = 'Portal_website_news_cat_model'; 
				
				if($action == 'info')
				{ 
					$can_pass = false;
					
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;
					}
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);
  
					$data['r_news_info'] = $q;
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page;
					
					$r_new_info = $q;



					$d = new \stdClass(); 
					$d->click_view = $r_new_info[0]->click_view+1;  
					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 
 
					$data['r_click_view'] = $r_new_info[0]->click_view;
					$data['r_id'] = $r_new_info[0]->id; 
					$data['r_type'] = 'news';
					$data['r_menu'] = 'news'; 
					$data['r_vote_bad'] = $r_new_info[0]->vote_bad;
					$data['r_vote_good'] = $r_new_info[0]->vote_good;
					$data['r_menu_id'] = $info_id;
					 
					if($r_new_info[0]->can_review == '1')
					{
						$comment_model = 'Portal_website_main_comment_model'; 

						$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE web_id = ? AND this_id = '".$info_id."' AND main_type = 'news' ORDER BY id ASC";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
						$r_this = json_decode($res);  
						$data['list_comment'] = $r_this;
						$r_loop = $r_this;
						
						foreach($r_loop as $ro)
						{ 
							$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE web_id = ? AND id = '".$ro->post_id."' AND main_type = 'news' ORDER BY id ASC";	 	
							$v = $_SESSION['portal_website_' . $this->mod . '_id'];
							$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
							$r_this = json_decode($res);   
							$ro_this = $r_this;
							$data['list_comment_photo'][$ro->id] = @$ro_this[0]->img1; 
						}   
					}
					   
					return view('news-detail', $data);  	
				}
				else
				{ 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_news']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;  
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 10;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'DESC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					} 
					
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
					  
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
					 
					if(@$_POST['start_search'] == '1')
					{
						if(isset($_POST['reset']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
							$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
							
							if(isset($_POST['cat']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
							} 
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
							}
							
							if(isset($_POST['mod_search']))
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
							}
							
							if(isset($_POST['date_start']) && isset($_POST['date_end']))
							{
								if($_POST['date_start'] <> '' && $_POST['date_end'] <> '')
								{
									$a = explode('-',$CustomHelper->input_post('date_start', TRUE));
									$b = explode('-',$CustomHelper->input_post('date_end', TRUE));
									 
									$_SESSION[$this->mod.'_'.$v1.'_date_start'] = mktime(0,0,0,(int)$a[1],(int)$a[0],(int)$a[2]);
									$_SESSION[$this->mod.'_'.$v1.'_date_end'] = mktime(23,59,59,(int)$b[1],(int)$b[0],(int)$b[2]);	
								} 
							}
							else
							{
								$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
								$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
							} 	
						} 
					}
					  
					$w1 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_date_start'] <> '' && $_SESSION[$this->mod.'_'.$v1.'_date_end'] <> '')
					{					
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' AND date_news >= '".$_SESSION[$this->mod.'_'.$v1.'_date_start']."' AND date_news <= '".$_SESSION[$this->mod.'_'.$v1.'_date_end']."'";  
					} 
					else
					{
						$w1 = " AND web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' "; 
					}
					
					$w2 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{
						$w2 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%' "; 
					}
 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2;	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
 
					$total_rows = count($q);
					$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
					
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE id > 0 ".$w1.$w2." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows']."";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$data['r_data'] = $q;
					


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res); 
 
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
					 
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
					 
					return view('news-main', $data);  	
				}
				
				break;
			
			case "question" :
			
				$this_model = 'Portal_website_question_model';
				$this_model_cat = 'Portal_website_question_cat_model'; 
				
				if($action == 'info')
				{ 
					$can_pass = false;
 
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					 
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res); 
					$data['r_news_info_cat'] = $q; 
						
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND cat_id = '".$info_id."' ORDER BY sort ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);
					 
					$data['r_news_info'] = $q; 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_question']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);  
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1; 
					$data['r_data_title'] = $title;
					$data['r_data_this_page'] = $page;
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					 
					return view('questionnaire-detail', $data);  	
				}
				else
				{ 
					$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_question']; 
					$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);
					$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title);  
					$data['r_page_type'] = $type;
					$data['r_page_id'] = $v1;  
					
					if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 99;
					}  
					if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'sort';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'ASC';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
					}
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
					if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
					} 
					
					if($page <> '')
					{ 
						$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
					}
					  
					$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
 
					$w1 = "";
					if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
					{ 
						$w1 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%'";
					} 

					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' ".$w1;
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
 
					$total_rows = count($q);
					$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
					  
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' ".$w1." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows'];
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res);
					$data['r_data'] = $q;
					   
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
					$q = json_decode($res);
  
					$data['r_data_cat'] = $q;
					$data['r_data_cat_num_rows'] = count($q);
					 
					$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
					$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
					$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
					$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
					$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
					$data['r_data_title'] = $title;
					$data['r_data_total_pages'] = $total_pages+1; 
					$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1; 
					$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group']; 
					 
					return view('questionnaire-main', $data);  	
				}
				
				break;
			
			case "poll" :
			
				$this_model = 'Portal_website_poll_model';
				$this_model_cat = 'Portal_website_poll_cat_model'; 
				
				$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_poll']; 
				$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title); 
				$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title); 
				$data['r_page_type'] = $type;
				$data['r_page_id'] = $v1;  
				$data['r_cat_id'] = @$_SESSION[$this->mod.'_'.$v1.'_group'];
				
				if(empty($_SESSION[$this->mod.'_'.$v1.'_group']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id;
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_max_rows']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_max_rows'] = 10;
				}  
				if(empty($_SESSION[$this->mod.'_'.$v1.'_page_num']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_page_num'] = 0;
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_1']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_sort_1'] = 'id';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_sort_2']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_sort_2'] = 'DESC';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
				}
				if(empty($_SESSION[$this->mod.'_'.$v1.'_date_start']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_date_end']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
				} 
				if(empty($_SESSION[$this->mod.'_'.$v1.'_start_search']))
				{
					$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
				} 
				
				if($page <> '')
				{ 
					$_SESSION[$this->mod.'_'.$v1.'_page_num'] = $page;
				}
				  
				$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
				 
				if(@$_POST['start_search'] == '1')
				{
					if(isset($_POST['reset']))
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
						$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = ''; 
					} 
					else
					{
						$_SESSION[$this->mod.'_'.$v1.'_start_search'] = '1';
						
						if(isset($_POST['cat']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $CustomHelper->input_post('cat', TRUE); 
						} 
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_group'] = $r[0]->data_id; 
						}
						
						if(isset($_POST['mod_search']))
						{
							$_SESSION[$this->mod.'_'.$v1.'_search'] = $CustomHelper->input_post('mod_search', TRUE); 
						}
						else
						{
							$_SESSION[$this->mod.'_'.$v1.'_search'] = '';
						}
						
						$_SESSION[$this->mod.'_'.$v1.'_date_start'] = '';
						$_SESSION[$this->mod.'_'.$v1.'_date_end'] = '';
					} 
				}




				$start_rows = $_SESSION[$this->mod.'_'.$v1.'_page_num'] * $_SESSION[$this->mod.'_'.$v1.'_max_rows'];
 
				$w1 = "";
				if($_SESSION[$this->mod.'_'.$v1.'_search'] <> '')
				{ 
					$w1 = " AND ".$CustomHelper->L('title','en_title')." LIKE '%".$_SESSION[$this->mod.'_'.$v1.'_search']."%'";
				} 

				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' ".$w1;
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
				$q = json_decode($res); 

				$total_rows = count($q); 
				$total_pages = ceil($total_rows/$_SESSION[$this->mod.'_'.$v1.'_max_rows'])-1;  
				  
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND cat_id = '".$_SESSION[$this->mod.'_'.$v1.'_group']."' AND status = '1' ".$w1." ORDER BY ".$_SESSION[$this->mod.'_'.$v1.'_sort_1'] . ' ' . $_SESSION[$this->mod.'_'.$v1.'_sort_2']." LIMIT ".$start_rows.",".$_SESSION[$this->mod.'_'.$v1.'_max_rows'];
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
				$q = json_decode($res);
				$data['r_data'] = $q;
				 
				$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model_cat)." WHERE web_id = ? AND status = '1' ORDER BY sort ASC";
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model_cat)),$q,$v);
				$q = json_decode($res);
				 
				$data['r_data_cat'] = $q;
				$data['r_data_cat_num_rows'] = count($q);
				 
				$data['r_data_cat_this'] = $_SESSION[$this->mod.'_'.$v1.'_group'];
				$data['r_data_date_start'] = @$_SESSION[$this->mod.'_'.$v1.'_date_start'];
				$data['r_data_date_end'] = @$_SESSION[$this->mod.'_'.$v1.'_date_end'];
				$data['r_data_search'] = @$_SESSION[$this->mod.'_'.$v1.'_search'];
				$data['r_data_start_search'] = @$_SESSION[$this->mod.'_'.$v1.'_start_search']; 
				$data['r_data_title'] = $title;
				$data['r_data_total_pages'] = $total_pages+1; 
				$data['r_data_this_page'] = $_SESSION[$this->mod.'_'.$v1.'_page_num']+1;   
				 	
				if($action == 'info')
				{ 
					$can_pass = false;
 
					if($info_id <> '')
					{
						$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
						$q = json_decode($res);      
						if(count($q) > 0)
						{
							$can_pass = true;	
						} 
					}
					
 
					if($can_pass)
					{
						
					}
					else
					{
						?>
						<script> window.history.back(); </script> 
						<?php
						exit;	
					}


					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$r_new_info = $q; 
					$data['r_data_this'] = $q;
					
					$d = new \stdClass(); 
					$d->click_view = $r_new_info[0]->click_view+1;  

					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$info_id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 
 
					$sum = 0;
					
					$sum = $sum + $r_new_info[0]->p1;
					$sum = $sum + $r_new_info[0]->p2;
					$sum = $sum + $r_new_info[0]->p3;
					$sum = $sum + $r_new_info[0]->p4;
					$sum = $sum + $r_new_info[0]->p5;
					$sum = $sum + $r_new_info[0]->p6;
					$sum = $sum + $r_new_info[0]->p7;
					$sum = $sum + $r_new_info[0]->p8;
					$sum = $sum + $r_new_info[0]->p9;
					$sum = $sum + $r_new_info[0]->p10;
					
					$data['r_data_count_all'] = $sum;
					 
					
					return view('vote-detail', $data); 
				}
				else
				{ 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($this_model)." WHERE web_id = ? AND status = '1' AND id = '".$data['r_data'][0]->id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v);
					$q = json_decode($res); 
					$r_new_info = $q;  
					$data['r_data_this'] = $q;
					
					$d = new \stdClass(); 
					$d->click_view = $r_new_info[0]->click_view+1;  

					$this_qr = ''; 
					foreach($d as $key=>$value) 
					{
						$this_qr = $this_qr.$key." = '".addslashes($value)."',";
					}
					$this_qr = substr($this_qr,0,-1);  
					$q = "UPDATE ".$CustomHelper->model_to_table($this_model)." SET ".$this_qr." WHERE web_id = ? AND id = '".$data['r_data'][0]->id."'";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($this_model)),$q,$v); 
  
					$sum = 0;
					
					$sum = $sum + $r_new_info[0]->p1;
					$sum = $sum + $r_new_info[0]->p2;
					$sum = $sum + $r_new_info[0]->p3;
					$sum = $sum + $r_new_info[0]->p4;
					$sum = $sum + $r_new_info[0]->p5;
					$sum = $sum + $r_new_info[0]->p6;
					$sum = $sum + $r_new_info[0]->p7;
					$sum = $sum + $r_new_info[0]->p8;
					$sum = $sum + $r_new_info[0]->p9;
					$sum = $sum + $r_new_info[0]->p10;
					
					$data['r_data_count_all'] = $sum;	
					
					return view('vote-main', $data); 
				}
				 
				break;
				
			case "texteditor" :
			
				$data['can_review'] = '';
				if($r[0]->can_review == '1')
				{
					$data['can_review'] = '1'; 
					$comment_model = 'Portal_website_main_comment_model'; 
 
					$q = "SELECT * FROM ".$CustomHelper->model_to_table($comment_model)." WHERE web_id = ? AND this_id = '".$v1."' AND main_type = '".$type."' ORDER BY id ASC";	 	
					$v = $_SESSION['portal_website_' . $this->mod . '_id'];
					$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api($comment_model)),$q,$v);
					$r_this = json_decode($res);  
					$data['list_comment'] = $r_this;
					$r_loop = $r_this;
					 
					foreach($r_loop as $ro)
					{ 
						$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_member_model')." WHERE web_id = ? AND id = '".$ro->post_id."'";	 	
						$v = $_SESSION['portal_website_' . $this->mod . '_id'];
						$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_member_model')),$q,$v);
						$r_this = json_decode($res); 
						$ro_this = $r_this;
						$data['list_comment_photo'][$ro->id] = $ro_this[0]->img1; 
					}   
				}
				$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_texteditor'];
				if(strlen($r[0]->img1) > 5)
				{
					$data['main_bg'] = $r[0]->img1;
				}
				$data['r_title'] = $CustomHelper->L($r[0]->title,$r[0]->title);
				$data['r_en_title'] = $CustomHelper->L($r[0]->en_title,$r[0]->en_title);
				$data['r_info'] = $CustomHelper->L($r[0]->info,$r[0]->en_info); 
				
				$data['r_click_view'] = $r[0]->click_view;
				$data['r_id'] = $r[0]->id; 
				$data['r_type'] = 'texteditor';
				$data['r_menu'] = $type; 
				$data['r_vote_bad'] = $r[0]->vote_bad; 
				$data['r_vote_good'] = $r[0]->vote_good;
				$data['r_menu_id'] = $v1; 
				
				return view('about-detail', $data);   
				break;
				
			case "url" :			
				?>
                <meta http-equiv="refresh" content="0;URL=<?php echo $CustomHelper->L($r[0]->url,$r[0]->en_url) ?>" />
                <?php
				exit;
				break;
				
			default :
			
				?>
				<meta http-equiv="refresh" content="0;URL=http://127.0.0.1:8000/<?php echo $this->mod ?>" />
				<?php
				exit;
				break; 
		} 
	}
	
	public function question_save()
	{    
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();   
		  
		$question_name = $CustomHelper->input_post('question_name', TRUE);
		$question_email = $CustomHelper->input_post('question_email', TRUE);  
		$question_tel = $CustomHelper->input_post('question_tel', TRUE);  
		$cat_id = $CustomHelper->input_post('cat_id', TRUE); 
		 
		$str_id = '';
		$str_info = '';
		while($each = each($_POST['a']))
		{
			$str_id = $str_id.$each[0].',';
			$str_info = $str_info.$each[1].',';
		}
		$str_id = substr($str_id,0,-1);
		$str_info = substr($str_info,0,-1);
		
 
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_question_model')." WHERE web_id = ? AND cat_id = '".$cat_id."' ORDER BY sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_question_model')),$q,$v);
		$q = json_decode($res); 
		$r = $q;
		$str_q = '';
		foreach($r as $rr)
		{
			$str_q = $str_q.$rr->title.',';
		}
		$str_q = substr($str_q,0,-1);
	 
		
		$captcha = $_POST['captcha'];
		$captchaHash = $_POST['captchaHash'];
	 
		if($CustomHelper->check_hash($captcha) == $captchaHash)
		{
			
		}
		else
		{
			?><meta charset="utf-8" />
			<script>
            alert('<?php echo $TextLanguage->lang('code_is_invalid') ?>');
            window.history.back();
            </script>
            <?php 
			exit;
		} 
		 
		$d = new \stdClass(); 
		$d->web_id = $_SESSION['portal_website_'.$this->mod.'_id']; 
		$d->cat_id = $cat_id; 
		$d->title = $question_name; 
		$d->email = $question_email; 
		$d->tel = $question_tel; 
		$d->q_id = $str_id; 
		$d->q_info = $str_q; 
		$d->a_info = $str_info;  
		$d->last_create = date('U'); 
		$d->ip = $_SERVER['REMOTE_ADDR'];
 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  	 
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_question_submit_model')),"INSERT INTO ".$CustomHelper->model_to_table('Portal_website_question_submit_model')." SET ".$this_qr."",''); 
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('send_information_complete') ?>');
		window.location = 'http://127.0.0.1:8000/<?php echo $this->mod ?>';
		</script>
		<?php
		exit; 	
	}

	public function register()
	{   
		?>
		<meta http-equiv="refresh" content="0;URL=http://www.bangkok.go.th/main/register.php">
		<?php
		exit;   
	}

	public function search()
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		
		$this->include_header();  
		  
		 
		 $data['mod'] = $this->mod;  
		 $data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id']; 
		 $data['title'] = $CustomHelper->L('ค้นหา','Search') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name'];
		 
		 $data['main_bg'] = '';
		 if(isset($_SESSION['portal_website_all_bg_' . $this->mod . '_mod_search']))
		 {
		 	$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_search'];	 
		 }
		  
		 $s = $CustomHelper->input_post('s', TRUE); 
		 $data['s'] = $s; 
		 
		 return view('portal/page-search', $data);   
	}
	
	public function search_iframe($s = '')
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage; 
		
		$this->include_header();  
		  
		 
		 $data['mod'] = $this->mod;  
		 $data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id']; 
		 $data['title'] = $CustomHelper->L('ค้นหา','Search') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name'];
		  
		 $data['s'] = $s;
		 
		 return view('portal/page-search-iframe', $data);   
	}
	
	public function show($v)
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();
		
		$data['mod'] = $this->mod;  
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_texteditor'];
		$data['title'] = $this->mod;
		  
		return view('portal/'.$v, $data); 	
	}
	
	public function sitemap()
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		  
		$data['mod'] = $this->mod;   
		$data['theme'] = 'theme_'.$_SESSION['portal_website_style_' . $this->mod . '_template_id'];  
		$data['title'] = $TextLanguage->lang('sitemap') . ' - ' . $_SESSION['portal_website_' . $this->mod . '_web_name']; 
		$data['list_str_navi'] = '<li class="current"><a href="#">' . $TextLanguage->lang('sitemap') . '</a> </li>'; 
		$data['main_bg'] = $_SESSION['portal_website_all_bg_' . $this->mod . '_mod_sitemap'];  
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_main_menu_page_model')." WHERE web_id = ? ORDER BY sort ASC";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_main_menu_page_model')),$q,$v);
		$r = json_decode($res);   
		
		$main_str = ''; 
		foreach ($r as $row_cat)
		{     
			if($row_cat->page_type == 'group')
			{
				$main_str = $main_str . '<div class="sitemap-box"><h2 class="fontfacetext">' . $CustomHelper->L($row_cat->title,$row_cat->en_title) . '</h2><ul>';
			}
			else
			{
			 	$main_str = $main_str . '<div class="sitemap-box"><h2 class="fontfacetext"><a href="' . "http://127.0.0.1:8000/" . $this->mod . '/page/main/' . $row_cat->id . '" target="_top" style="color:#008AD8;text-decoration:underline">' . $CustomHelper->L($row_cat->title,$row_cat->en_title) . '</a></h2><ul>';	
			}


			$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '0' ORDER BY sort ASC";	 	
			$v = $_SESSION['portal_website_' . $this->mod . '_id'];
			$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
			$r_sub1 = json_decode($res);  
			 
			foreach ($r_sub1 as $row_cat_sub1)
			{ 
				if($row_cat_sub1->page_type == 'group')
				{ 
					$main_str = $main_str . '<li><i class="icon-caret-right"></i> <a href="javascript:;">' . $CustomHelper->L($row_cat_sub1->title,$row_cat_sub1->en_title) . '</a><ul class="submenu-2">';	
				}
				else
				{
					$main_str = $main_str . '<li><i class="icon-caret-right"></i> <a href="' . "http://127.0.0.1:8000/" . $this->mod . '/page/sub/' . $row_cat_sub1->id . '" target="_top" style="text-decoration:underline">' . $CustomHelper->L($row_cat_sub1->title,$row_cat_sub1->en_title) . '</a><ul class="submenu-2">';	
				} 

				$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_page_model')." WHERE web_id = ? AND cat_id = '".$row_cat->id."' AND page_id = '".$row_cat_sub1->id."' ORDER BY sort ASC";	 	
				$v = $_SESSION['portal_website_' . $this->mod . '_id'];
				$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_page_model')),$q,$v);
				$r_sub2 = json_decode($res);
 
				foreach ($r_sub2 as $row_cat_sub2)
				{	  
					if($row_cat_sub2->page_type == 'group')
					{
						$main_str = $main_str . '<li><i class="icon-caret-right"></i> <a href="javascript:;">' . $CustomHelper->L($row_cat_sub2->title,$row_cat_sub2->en_title) . '</a></li>';	
					}
					else
					{
						$main_str = $main_str . '<li><i class="icon-caret-right"></i> <a href="' . "http://127.0.0.1:8000/" . $this->mod . '/page/sub/' . $row_cat_sub2->id . '" target="_top" style="text-decoration:underline">' . $CustomHelper->L($row_cat_sub2->title,$row_cat_sub2->en_title) . '</a></li>';		 
					}
				}
				
				$main_str = $main_str . '</ul></li>';	
			}  
			
			$main_str = $main_str . '</ul></div>';
		} 
		
		$data['main_str'] = $main_str;
		 
		return view('sitemap', $data);     
	} 

	public function update_download($v1)
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		  
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_download_model')." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_download_model')),$q,$v);
		$q = json_decode($res); 
		$r = $q;
		
		$d = new \stdClass(); 
		$d->click_view = $r[0]->click_view+1;  
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_download_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_download_model')),$q,$v);   
		echo '1';
		exit;   
	} 
	
	public function update_faq($v1)
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_faq_model')." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_faq_model')),$q,$v);
		$q = json_decode($res); 
		$r = $q;
		
		$d = new \stdClass(); 
		$d->click_view = $r[0]->click_view+1;  
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_faq_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_faq_model')),$q,$v); 
		echo '1';
		exit;   
	} 
	
	public function update_gallery($v1)
	{ 
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  

		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_gallery_model')." WHERE web_id = ? AND id = '".$v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_gallery_model')),$q,$v);
		$q = json_decode($res); 
		$r = $q;
		
		$d = new \stdClass(); 
		$d->click_view = $r[0]->click_view+1;  
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_gallery_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".v1."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_gallery_model')),$q,$v); 
		echo '1'; 
		exit;   
	} 
	
	public function vote_save()
	{  
		$CustomHelper = new \App\CustomHelper;
		$TextLanguage = new \App\TextLanguage;
		
		$this->include_header();  
		 
		if(@$_SESSION['login_'.$this->mod.'_pass'] == '1')
		{ 
			
		}
		else
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('please_login') ?>');
			window.history.back();
			</script>
            <?php
			exit;	
		}
		
		if(empty($_POST['c']))
		{
			?>
            <script>
			window.history.back();
			</script>
            <?php
			exit;	
		}
		if(empty($_POST['id']))
		{
			?>
            <script>
			window.history.back();
			</script>
            <?php
			exit;	
		} 
		  
		 
		
		$c = $CustomHelper->input_post('c', TRUE);  
		$id = $CustomHelper->input_post('id', TRUE);  
		
		if(@$_SESSION['vote_'.$this->mod.'_'.$id] == 1)
		{
			?><meta charset="utf-8" />
            <script>
			alert('<?php echo $TextLanguage->lang('you_already_vote') ?>');
			window.history.back();
			</script>
            <?php
			exit;	 
		}
		
		$q = "SELECT * FROM ".$CustomHelper->model_to_table('Portal_website_poll_model')." WHERE web_id = ? AND id = '".$id."'";	 	
		$v = $_SESSION['portal_website_'.$this->mod.'_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_poll_model')),$q,$v);
		$q = json_decode($res); 	
		$r = $q;
		 
		$d = new \stdClass(); 
		
		switch($c)
		{
			case "1" : 
				$d->p1 = $r[0]->p1 + 1;
				break;	
			case "2" : 
				$d->p2 = $r[0]->p2 + 1;
				break;
			case "3" : 
				$d->p3 = $r[0]->p3 + 1;
				break;
			case "4" : 
				$d->p4 = $r[0]->p4 + 1;
				break;
			case "5" : 
				$d->p5 = $r[0]->p5 + 1;
				break;
			case "6" : 
				$d->p6 = $r[0]->p6 + 1;
				break;	
			case "7" : 
				$d->p7 = $r[0]->p7 + 1;
				break;
			case "8" : 
				$d->p8 = $r[0]->p8 + 1;
				break;
			case "9" : 
				$d->p9 = $r[0]->p9 + 1;
				break;
			case "10" : 
				$d->p10 = $r[0]->p10 + 1;
				break;
		}  
 
		$this_qr = ''; 
		foreach($d as $key=>$value) 
		{
			$this_qr = $this_qr.$key." = '".addslashes($value)."',";
		}
		$this_qr = substr($this_qr,0,-1);  
		$q = "UPDATE ".$CustomHelper->model_to_table('Portal_website_poll_model')." SET ".$this_qr." WHERE web_id = ? AND id = '".id."'";	 	
		$v = $_SESSION['portal_website_' . $this->mod . '_id'];
		$res = $CustomHelper->API_CALL($CustomHelper->API_URL($CustomHelper->model_to_api('Portal_website_poll_model')),$q,$v); 
		?><meta charset="utf-8" />
		<script>
		alert('<?php echo $TextLanguage->lang('vote_complete') ?>');
		window.history.back();
		</script>
		<?php
		$_SESSION['vote_'.$this->mod.'_'.$id] = 1;
		exit; 
	}
}
