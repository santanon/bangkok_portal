</div><!-- form-box -->

										</div>
                                        
                                        <!-- content -->
   
									</div><!-- right -->
                                    
									<div class="clearfix"></div>
								</div>
							</div><!-- content-slide-box -->

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
	
	//mainmenuFocus(1,1,2);
	
	/* side menu focus */
	/* note: sending "group id" and "menu id"  */
	
	// side menu group id = 0
	
	<?php echo @$config_footer_js; ?>
	  
});
<?php
if(@$read_reply == 1)
{
	?>  
	CKEDITOR.instances.info.on('instanceReady',function(){
   		CKEDITOR.instances.info.focus();
	});
	<?php
}
?> 
</script>
<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2; 
	 
	 
	
	$.fancybox.close();
} 
</script>
 
@include('manage.include.responsive')