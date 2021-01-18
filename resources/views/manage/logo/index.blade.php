<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.header') 

	<div id="se-wrapper">
		<div id="page-container" class="no-bg-slider">
 
			@include('manage.include.logo_menu')

			<div id="se-maincontainer-wrapper" class="page02">
				<div id="se-maincontainer">
                
                @include('manage.include.page_navi')
                
					<div id="page2col">
						<div id="content-slide-container">

							<div class="content-slide-box expanded" style="width:680px;">
                            
                            @include('manage.include.box_head') 
                             
								<div class="content-slide-detail">

									<div id="logo-select">
										<div data-tab-group="1" class="mod_tab-content">
											<div class="header">
												<span class="header-text fontfacetext-bold"><?php echo $TextLanguage->lang('select_images_from') ?>:</span>
												<span data-tab-id="1" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#"><?php echo $TextLanguage->lang('my_computer') ?></a></span>
												<span data-tab-id="2" class="tab-btn btn-2stage big blue"><a class="fontfacetext" href="#"><?php echo $TextLanguage->lang('image_url') ?></a></span>
											</div>
											<div class="content">
                                            
                                            
												<div data-tab-id="1" class="tab-content">
													<div id="logo-select-pc">
                                                    
                                                    
														<iframe frameborder="0" scrolling="yes" width="100%" height="350" src="<?php echo base_url() ?>panels/image_upload/edit_logo"></iframe>
                                                        
                                                        
													</div>
												</div><!-- tab-content -->
                                                
                                                
                                                
												<div data-tab-id="2" class="tab-content">
													<div id="logo-select-url">
														<div class="form-box">
                                            	<script type="text/javascript">
												function check_form()
												{
													if(document.getElementById('url').value == '')
													{
														document.getElementById('url').focus();
														return false;
													}  																				
													if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
													{
														return false;
													}
												}
												</script>
                                            	<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/url_submit">
												<table>
													<tbody>
                                                    	  
														<tr>
															<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('image_url'); ?> <span style="color:red">*</span></th>
															<td>
                                                            
<input id="url" name="url" type="text" class="sm-input" style="width:400px" placeholder="http://xxx" <?php
if($_SESSION['panel_style_logo_type'] == 2)
{
	?> value="<?php echo $_SESSION['panel_style_logo_img1'] ?>" <?php
} 
?> > <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/url',1120,640);return false;" /> 
<br /> 
<br />
<?php echo $TextLanguage->lang('image_size_logo'); ?> 

                                                            </td>
														</tr>
                                                      
                                                        <tr>
                                                            <th valign="top">&nbsp;</th>
                                                            <td>
                                                            
                                                            <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
															 
                                                            </td>
                                                        </tr>
                                                        
                                                        
													</tbody>
												</table>
                                                </form>
											</div>
													</div>
												</div><!-- tab-content -->
                                                
                                                
                                                
											</div>
										</div><!-- mod_tab-content -->
									</div>

								</div>
                                
							</div><!-- content-slide-box -->
 
							<div class="sidebox">
								<span class="header-text fontfacetext-bold"><?php echo $TextLanguage->lang('current_logo') ?>:</span>
								<div id="logo-current">
                                	<?php
									if($_SESSION['panel_style_logo_type'] == 2)
									{
										?><img src="<?php echo $_SESSION['panel_style_logo_img1'] ?>"><?php
									}
									else
									{
										?><img src="<?php echo base_url() ?>upload/web/<?php echo $_SESSION['panel_style_logo_img1'] ?>"><?php
									}
									?> 
								</div>
							</div><!-- sidebox -->
                              

						</div><!-- content-slide-container -->
					</div>
				</div>
			</div><!-- main container -->

			@include('manage.include.footer')  

		</div><!-- page-container -->
	</div><!-- se-wrapper -->

@include('manage.include.scripts') 

<!-- addition script for current page -->
<script>
$(function(){

/* main menu focus */
/* note: sending "row id" , "main id" , " sub id " */
mainmenuFocus(1,1,1);

/* tab content focus */
/* note: sending "tab group id" and "tab menu id"  */

<?php
if($_SESSION['panel_style_logo_type'] == 2)
{
	?>tabFocus(1,2);<?php
}
else
{
	?>tabFocus(1,1);<?php
}
?> 


/* btn2stage focus */
/* note: sending btn id*/
//btn2stageFocus(2);
	  
}); 


function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2; 
	 
	try 
	{
		document.getElementById(v1+'_preview').src = v2; 	
		document.getElementById(v1+'_preview').value = v2; 	
	}
	catch(err) 
	{
		 
	}
	
	$.fancybox.close();
} 
</script>
 
@include('manage.include.responsive')
