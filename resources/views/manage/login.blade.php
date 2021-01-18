<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>  
<!doctype html>
<!--[if lt IE 8]>      <html class="lt-ie11 lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie11 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="lt-ie11 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>        <html class="lt-ie11" lang="en"> <![endif]-->
<!--[if gt IE 10]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- add extra meta tag here -->
	<!--                         --> 
    @include('manage.include.core')
    
	<title><?php echo $TextLanguage->lang('title_login'); ?></title>

<script> 
 /*
if(document.referrer == "http://www.bangkok.go.th/panel/login")
{
	window.top.location = "http://www.bangkok.go.th/panel/blank";
}
 */
</script>
</head>
<body>
   
<div id="se-wrapper">
    <div id="page-container">

        <div class="main-slider bg-slider slider-container">
            <div id="foo">
                <img src="<?php echo base_url(); ?>assets/panel/theme/bangkok-panel/images/bg-default.jpg" alt="<?php echo $TextLanguage->lang('bangkok_portal'); ?>">
                <!-- <img src="http://placehold.it/1265x620/456/789"> -->
            </div>
        </div><!-- slider-container -->

        <div id="se-header-wrapper">

            <div id="se-header">
                <div id="se-header__topbar">
                    <div id="main-logo">
                        <a href="../"><img src="<?php echo base_url(); ?>assets/panel/theme/bangkok-panel/images/bangkok.png" title="<?php echo $TextLanguage->lang('bangkok_portal'); ?>" alt="<?php echo $TextLanguage->lang('bangkok_portal'); ?>"></a>
                        <span class="main-logo__text fontfacetext"><?php echo $TextLanguage->lang('bangkok_portal'); ?></span>
                    </div><!-- mainl-logo -->
                </div>
            </div>
        </div><!-- header -->

        <div id="se-maincontainer-wrapper">
            <div id="se-maincontainer">
                <div id="login-page">
                    <div id="content-slide-container">

                        <div class="content-slide-box expanded">
                            <div class="content-slide-trigger">
                                <div class="slide-bg"></div>
                                <a href="#" class="trigger-text fontfacetext">
                                    <span><?php echo $TextLanguage->lang('user_signin'); ?></span>
                                </a>
                                <i class="icon-chevron-down"></i>
                                <i class="icon-chevron-right"></i>
                            </div><!-- trigger -->
                            <div class="content-slide-detail">
                                <div id="login-form-box">
                                <script>
								function check_form()
								{
									if(document.getElementById('uId').value == '')
									{
										document.getElementById('uId').focus();
										return false;
									}
									if(document.getElementById('uPwd').value == '')
									{
										document.getElementById('uPwd').focus();
										return false;
									}
								}
								</script>
                                <?php
								if($login_alert == 1)
								{
									?> 
                                    <div align="center" style="font-size:12px;color:#FF0000;"><?php echo $login_alert_message; ?><br><br></div>
									<?php
								}
								?>  
                                    <form action="<?php echo base_url(); ?>panel/login_check" method="post" onSubmit="return check_form()">
                                        <table>
                                            <tr>
                                                <td align="right"><label for="uId" class="fontfacetext-bold"><?php echo $TextLanguage->lang('username'); ?></label></td>
                                                <td><div class="input-round-big"><input id="uId" name="u" type="text"></div></td>
                                            </tr>
                                            <tr>
                                                <td align="right"><label for="uPwd" class="fontfacetext-bold"><?php echo $TextLanguage->lang('password'); ?></label></td>
                                                <td><div class="input-round-big"><input id="uPwd" name="p" type="password"></div></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><span class="btn round big green"><input type="submit" value="<?php echo $TextLanguage->lang('login'); ?>" class="fontfacetext"></span></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><i class="icon-caret-right"></i> <a class="btn-forget-pass fontfacetext" href="<?php echo base_url(); ?>panel/forgot_password"><?php echo $TextLanguage->lang('forgot_password'); ?></a></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div><!-- detail -->
                        </div><!-- content-slide-box -->

                    </div><!-- content-slide-container -->
                </div>
            </div>
        </div><!-- main container -->

        <div id="se-footer-wrapper">
            <div id="se-footer">
                <div class="se-footer__box">
                    <div id="callcenter">
                        <span class="cc-text fontfacetext-bold"><?php echo $TextLanguage->lang('call_center'); ?></span>
                        <span class="cc-num fontfacetext-bold">02-332-1234</span>
                    </div>
                </div>
            </div>
        </div><!-- footer -->

    </div><!-- page-container -->
</div><!-- se-wrapper -->
 
@include('manage.include.scripts')

<!-- addition script for current page -->
<script>
$(function(){ 
/* script here */ 
});

$(document).ready(function(){
  	document.getElementById('uId').focus();
});

</script>

<!-- responsive control js script  -->
<!-- <script src="<?php echo base_url(); ?>assets/panel/theme/bangkok-panel/js/responsive-ctrl.js"></script> -->
</body>
</html>