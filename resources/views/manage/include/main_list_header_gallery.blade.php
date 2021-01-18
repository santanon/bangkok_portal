@include('manage.include.header') 

	<div id="se-wrapper">
		<div id="page-container" class="no-bg-slider">
 
			@include('manage.include.logo_menu')

			<div id="se-maincontainer-wrapper" class="page01">
				<div id="se-maincontainer">
                 
                @include('manage.include.page_navi')
                
					<div id="page1col">
						<div id="content-slide-container">

							<div class="content-slide-box expanded">
                             
                            	 @include('manage.include.box_head') 
                                  
								<div class="content-slide-detail">
									<div id="sidemenu-box" class="left">
										 
                                      @include('manage.include.sub_menu')  
                                         
									</div><!-- left -->
                                    
									<div class="right">
 
                                        @include('manage.include.content_head')   
                                   
                                        <div class="desc-box">
                                         
        								<?php echo $config_list_header_info ?>
                                         
										<?php
                                        if($config_use_add == true || $config_use_sort == true)
                                        {
                                            if($config_dropdown_cat_file <> '')
                                            {
                                                ?>
                                                <br /><br />
                                                @include($config_dropdown_cat_file.'_sort')   
                                                <?php 
                                            }	
                                        } 
                                        ?>
                                         
                                        </div>
                                        
                                          
										<div class="header"> 
                                         
                                        
                                        	<div class="left"> 
                                            
											 
												 
											</div>    
                                            <div class="right">
                                            
                                             
                                            
                                            <?php
											if($config_use_add)
											{
												?>
                                                 <span class="btn round big green"><input onclick="window.location = '<?php echo base_url() . 'panels/' . $config_mod . '/add' ?>';" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('add'); ?>"></span> 
                                                <?php
											}
											?>
                                             
                                            
                                       
                                             
                                            
                                             
											</div>  
										</div><!-- header -->
                                
                                        <div class="content">
											<div class="table-box">
                                            
 