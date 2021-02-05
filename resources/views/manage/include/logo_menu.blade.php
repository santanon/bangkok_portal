<div id="se-header-wrapper">
	<div id="se-header">
		<div id="se-header__topbar">
			<div id="main-logo">
				<a href="<?php echo base_url(); ?>panel/"><img src="<?php echo base_url(); ?>assets/panel/theme/bangkok-panel/images/bangkok.png" title="<?php echo $TextLanguage->lang('bangkok_portal'); ?>" alt="<?php echo $TextLanguage->lang('bangkok_portal'); ?>"></a>
				<span class="main-logo__text fontfacetext"><?php echo $TextLanguage->lang('bangkok_portal'); ?></span>
			</div><!-- mainl-logo -->
			<div id="topbar-panel">
				<div class="topbar-panel__box">
					<div id="site-preview">
						<span class="site-preview-text"><a target="_blank" href="<?php echo base_url() ?><?php echo $_SESSION['panel_web_url'] ?>/?f=1" class="fontfacetext"><?php echo $TextLanguage->lang('view_your_website'); ?></a></span>
						<i class="icon-caret-down"></i>
					</div>
				</div><!-- box -->
				<div class="topbar-panel__box">
					<span class="simple-text fontfacetext"><?php 
					
					if(@$_SESSION['panel_login_web_user_login'] == '1')
					{
						?><?php echo $_SESSION['panel_login_web_user_name'] ?><?php
					}
					else
					{
						?><?php echo $TextLanguage->lang('website_no'); ?><?php echo sprintf('%08d', $_SESSION['panel_id']); ?><?php
					}
					
					?>
					</span>
				</div><!-- box -->
				<div class="topbar-panel__box">
					<div id="button-group">
                    	<span class="btn round big green"><a class="fontfacetext" href="http://127.0.0.1:8000/manage-admin/inbox?m=<?php echo $config_mod ?>"><?php echo $TextLanguage->lang('inbox'); ?></a></span>
						<span class="btn round big green"><a class="fontfacetext" href="http://127.0.0.1:8000/manage-admin/setting_account?m=<?php echo $config_mod ?>"><?php echo $TextLanguage->lang('account_setting'); ?></a></span>
						<span class="btn round big blue"><a class="fontfacetext" onclick="if(!confirm('<?php echo $TextLanguage->lang('logout_confirm'); ?>?')){ return false; }" href="<?php echo base_url(); ?>panel/logout"><?php echo $TextLanguage->lang('logout'); ?></a></span>
					</div>
				</div><!-- box -->
			</div><!-- topbar-panel -->
		</div><!-- header__topbar -->
        
		<div class="shadow-wrapper">
			<div id="se-header__mainmenu">
				<div class="mainmenu-row" data-m-row="1">
					<ul class="mainmenu-list">
						<li data-m-btn="1" <?php if( $_SESSION['panel_login_show_menu'][1] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_home_page'); ?></a><i class="icn-mainmenu menu-01"></i></li>
						<li data-m-btn="2" <?php if( $_SESSION['panel_login_show_menu'][2] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_setting'); ?></a><i class="icn-mainmenu menu-02"></i></li>
						<li data-m-btn="3" <?php if( $_SESSION['panel_login_show_menu'][3] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_template'); ?></a><i class="icn-mainmenu menu-03"></i></li>
						<li data-m-btn="4" <?php if( $_SESSION['panel_login_show_menu'][4] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_menu'); ?></a><i class="icn-mainmenu menu-04"></i></li>
						<li data-m-btn="5" <?php if( $_SESSION['panel_login_show_menu'][5] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_page'); ?></a><i class="icn-mainmenu menu-05"></i></li>
                        <!--<li data-m-btn="6"><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_member'); ?></a><i class="icn-mainmenu menu-06"></i></li>-->
						<li data-m-btn="7" <?php if( $_SESSION['panel_login_show_menu'][6] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_banner'); ?></a><i class="icn-mainmenu menu-03"></i></li>
						<li data-m-btn="8" <?php if( $_SESSION['panel_login_show_menu'][7] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="javascript:;" onclick="callLightbox_fm('<?php echo base_url(); ?>panel/fm/index/index',1120,640);return false;" class="fontfacetext"><?php echo $TextLanguage->lang('menu_file_manager'); ?></a><i class="icn-mainmenu menu-07"></i></li>
						<li data-m-btn="9" <?php if( $_SESSION['panel_login_show_menu'][8] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_news'); ?></a><i class="icn-mainmenu menu-08"></i></li>
						<li data-m-btn="10" <?php if( $_SESSION['panel_login_show_menu'][9] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_calendar'); ?></a><i class="icn-mainmenu menu-09"></i></li>
						<li data-m-btn="11" <?php if( $_SESSION['panel_login_show_menu'][10] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_gallery'); ?></a><i class="icn-mainmenu menu-10"></i></li>
						<li data-m-btn="12" <?php if( $_SESSION['panel_login_show_menu'][11] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_webboard'); ?></a><i class="icn-mainmenu menu-11"></i></li>
                        <li data-m-btn="13" <?php if( $_SESSION['panel_login_show_menu'][12] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_poll'); ?></a><i class="icn-mainmenu menu-12"></i></li>
                        <li data-m-btn="14" <?php if( $_SESSION['panel_login_show_menu'][13] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_questionnaire'); ?></a><i class="icn-mainmenu menu-08"></i></li>
						<li data-m-btn="15" <?php if( $_SESSION['panel_login_show_menu'][14] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_faqs'); ?></a><i class="icn-mainmenu menu-14"></i></li>
						<li data-m-btn="16" <?php if( $_SESSION['panel_login_show_menu'][15] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_newsletter'); ?></a><i class="icn-mainmenu menu-13"></i></li>
						<li data-m-btn="17" <?php if( $_SESSION['panel_login_show_menu'][16] == '1'){}else{ ?> style="display:none;" <?php } ?>><a href="#" class="fontfacetext"><?php echo $TextLanguage->lang('menu_download'); ?></a><i class="icn-mainmenu menu-05"></i></li> 
					</ul>
					<div class="submenu-row">
						<a class="submenu-row__close fontfacetext-bold" href="#">X</a>
                        
<ul data-s-list="1" class="submenu-list" > 
<li><a href="<?php echo base_url(); ?>panels/logo" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_logo'); ?></a><i class="icon-caret-right"></i></li>
<!--<li><a href="<?php echo base_url(); ?>panels/main_menu" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_mainmenu'); ?></a><i class="icon-caret-right"></i></li>-->
<li><a href="<?php echo base_url(); ?>panels/search" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_search'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/language" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_lang'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/home_bg" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_bg'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/contentbox_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_contentbox'); ?></a><i class="icon-caret-right"></i></li>
<!--<li><a href="<?php echo base_url(); ?>panels/footer_menu" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_footmenu'); ?></a><i class="icon-caret-right"></i></li>-->
<li><a href="<?php echo base_url(); ?>panels/copyright" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_copyright'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/social" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_social'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/statistic" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_stat'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/contactus" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_home_contact'); ?></a><i class="icon-caret-right"></i></li>
</ul> 			
                        
<ul data-s-list="2" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/setting_website" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_setting_website'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/setting_account" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_setting_account'); ?></a><i class="icon-caret-right"></i></li>
<!--<li><a href="<?php echo base_url(); ?>panels/setting_profile" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_setting_profile'); ?></a><i class="icon-caret-right"></i></li>-->
<li><a href="<?php echo base_url(); ?>panels/setting_bg" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_setting_bg'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/setting_html_css" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_setting_html_css'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="3" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/template_my" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_temp_my'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/template_list" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_temp_list'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="4" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/main_menu" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_menu_main'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/top_menu" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_menu_sub'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/footer_menu" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_menu_foot'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="5" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/page" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_page_list'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/page/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_page_add'); ?></a><i class="icon-caret-right"></i></li>  
</ul> 
<ul data-s-list="6" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/member" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_member_list'); ?></a><i class="icon-caret-right"></i></li>  
 
</ul>
<ul data-s-list="7" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/banner_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_banner_group'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/banner" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_banner_list'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/banner/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_banner_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="8" class="submenu-list" >
<li><a href="#" class="fontfacetext">File Manager</a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="9" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/news_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_news_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/news" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_news_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/news/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_news_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="10" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/activities_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_calendar_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/activities" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_calendar_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/activities/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_calendar_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="11" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/gallery_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_gallery_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/gallery" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_gallery_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/gallery/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_gallery_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="12" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/webboard_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_webboard_room_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/webboard_cat/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_webboard_room_add'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/webboard" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_webboard_topic_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/webboard/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_webboard_topic_add'); ?></a><i class="icon-caret-right"></i></li>
</ul>
<ul data-s-list="13" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/poll_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_poll_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/poll" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_poll_list'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/poll/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_poll_add'); ?></a><i class="icon-caret-right"></i></li>
</ul>
<ul data-s-list="14" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/question_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_q_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/question" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_q_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/question/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_q_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="15" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/faq_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_faq_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/faq" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_faq_list'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/faq/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_faq_add'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="16" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/enew_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_enew_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/enew" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_enew_email'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/enew_send" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_enew_send'); ?></a><i class="icon-caret-right"></i></li> 
</ul>
<ul data-s-list="17" class="submenu-list" >
<li><a href="<?php echo base_url(); ?>panels/download_cat" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_download_group'); ?></a><i class="icon-caret-right"></i></li>
<li><a href="<?php echo base_url(); ?>panels/download" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_download_list'); ?></a><i class="icon-caret-right"></i></li> 
<li><a href="<?php echo base_url(); ?>panels/download/add" class="fontfacetext"><?php echo $TextLanguage->lang('menu_sub_download_add'); ?></a><i class="icon-caret-right"></i></li> 
						</ul>
					</div><!-- submenu-row -->
				</div><!-- mainmenu-row -->
			</div><!-- se-header__mainmenu -->
		</div><!-- shadow-wrapper -->
	</div>
</div><!-- header -->