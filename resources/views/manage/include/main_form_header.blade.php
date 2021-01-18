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
                                        <?php echo $config_header_info; ?>
                                        </div>
                                        
										<div class="content">

											<div class="form-box">