                                                   
                                                        
 
                                                
                                                
											</div><!-- table-box --> 
										</div><!-- content -->
                                          
                                        
                                       
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
	
	
	
	/* side menu focus */
	/* note: sending "group id" and "menu id"  */
	
	 // side menu group id = 0
	
	<?php echo $config_list_footer_js; ?>
	  
});
</script>
 
@include('manage.include.responsive')