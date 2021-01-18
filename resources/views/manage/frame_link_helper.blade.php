<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   

@include('manage.include.header')  


<div id="page-container" class="no-bg-slider">
  
			<div id="se-maincontainer-wrapper" style="min-height:300px;height:300px">
				<div id="se-maincontainer">
                  
					<div id="page1col">
						<div id="content-slide-container">

							<div class="content-slide-box expanded" style="width:100%">
								<div class="content-slide-detail">
									  
									<div class="right" style="width:100%">    
 
                                        <div class="header" style="width:100%">    
                                            <div class="left"> 
												<table>
													<tr>
														<td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $TextLanguage->lang('link_helper') ?></span></td>
														<td valign="middle" width="76">
															 
														</td>
													</tr>
												</table>
											</div>  
										</div><!-- header -->                                   
                                        <div class="content">
                                       <?php echo $TextLanguage->lang('help_link_helper') ?>
                                        </div>
                                        <div class="content">
											<div class="form-box">
<br />
<b style="font-size:12px;"><?php echo $TextLanguage->lang('top_menu') ?>  : </b> <br />

<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str_top;
?>   
</table>

<br />
<b style="font-size:12px;"><?php echo $TextLanguage->lang('main_menu') ?> : </b> <br />

<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str;
?>   
</table>

<br />
<b style="font-size:12px;"><?php echo $TextLanguage->lang('footer_menu') ?> : </b> <br />

<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<?php
echo $main_str_footer;
?>   
</table>

<br />
<b style="font-size:12px;"><?php echo $TextLanguage->lang('other') ?> : </b> <br />

<table width="380" align="center" border="1" style="font-size:12px; font-family:Tahoma">
<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img('url','<?php echo base_url().$_SESSION['panel_web_url'] ?>/contact');" style="color:#666666"><?php echo $TextLanguage->lang('contactus') ?></a></td></tr>
<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img('url','<?php echo base_url().$_SESSION['panel_web_url'] ?>/register');" style="color:#666666"><?php echo $TextLanguage->lang('register') ?></a></td></tr>
<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img('url','<?php echo base_url().$_SESSION['panel_web_url'] ?>/login');" style="color:#666666"><?php echo $TextLanguage->lang('login') ?></a></td></tr>
<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img('url','<?php echo base_url().$_SESSION['panel_web_url'] ?>/forgot_password');" style="color:#666666"><?php echo $TextLanguage->lang('forgot_password') ?></a></td></tr>
<tr style="height:25px;"><td>&nbsp; - <a href="javascript:;" Onclick="window.parent.update_img('url','<?php echo base_url().$_SESSION['panel_web_url'] ?>/sitemap');" style="color:#666666"><?php echo $TextLanguage->lang('sitemap') ?></a></td></tr> 
</table>									
                                        
                                        
                                        
                                        
                                        </div> 
											 
										</div><!-- content -->
                                          
									</div><!-- right -->
                                    
                                    
                                    
                                    
									<div class="clearfix"></div>
								</div>
                                
                                
                                
                                
							</div><!-- content-slide-box -->

						</div><!-- content-slide-container -->
					</div>
                    
				</div>
			</div><!-- main container -->

		</div>



 
 	 
@include('manage.include.scripts') 

<script>
btn2stageFocus(98,1);
</script>