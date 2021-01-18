<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.header') 

	 <div id="se-wrapper">
		<div id="page-container">

			<div class="main-slider bg-slider slider-container">
				<div id="foo">
		            <img src="<?php echo base_url(); ?>assets/panel/theme/bangkok-panel/images/bg-default.jpg" alt="<?php echo $TextLanguage->lang('bangkok_portal'); ?>">
		            <!-- <img src="http://placehold.it/1265x620/456/789"> -->
		        </div>
			</div><!-- slider-container -->
  
			@include('manage.include.logo_menu') 

			<div id="se-maincontainer-wrapper">
				<div id="se-maincontainer">
					<div id="login-page">
						<div id="content-slide-container">

							<div class="content-slide-box">
								<div class="content-slide-trigger">
									<div class="slide-bg"></div>
									<a href="#" class="trigger-text fontfacetext">
										<span><?php echo $TextLanguage->lang('highlight_banner_1'); ?></span> 
                                        <span><?php echo $TextLanguage->lang('highlight_banner_2'); ?></span>
									</a>
									<i class="icon-chevron-down"></i>
									<i class="icon-chevron-right"></i>
								</div><!-- trigger -->
								<div class="content-slide-detail">
                                <?php
								$i = 0;
								foreach ($highlight_banner->result() as $r)
								{   
									?>
									<span class="link-text" style="font-size:12px;">- <a href="javascript:;" onclick="callLightbox('<?php echo base_url(); ?>panel/highlight_banner/<?php echo $r->id ?>',600,400);"><?php echo $r->title ?></a> <i>(<?php echo date('d/m/Y H:i:s',$r->last_create) ?>)</i> </span><br />
									<?php  
									$i++;
								}
								?> 
								</div>
							</div><!-- content-slide-box -->

							<div class="content-slide-box">
								<div class="content-slide-trigger">
									<div class="slide-bg"></div>
									<a href="#" class="trigger-text fontfacetext">
										<span><?php echo $TextLanguage->lang('instruction_steps_1'); ?></span>
										<span><?php echo $TextLanguage->lang('instruction_steps_2'); ?></span>
									</a>
									<i class="icon-chevron-down"></i>
									<i class="icon-chevron-right"></i>
								</div><!-- trigger -->
								<div class="content-slide-detail">
								<?php
								$i = 0;
								foreach ($ins_step->result() as $r)
								{   
									?>
									<span class="link-text" style="font-size:12px;">- <a href="javascript:;" onclick="callLightbox('<?php echo base_url(); ?>panel/ins_step/<?php echo $r->id ?>',600,400);"><?php echo $r->title ?></a> <i>(<?php echo date('d/m/Y H:i:s',$r->last_create) ?>)</i> </span><br />
									<?php  
									$i++;
								}
								?> 
								</div>
							</div><!-- content-slide-box -->

							<div class="content-slide-box expanded">
								<div class="content-slide-trigger">
									<div class="slide-bg"></div>
									<a href="#" class="trigger-text fontfacetext">
										<span><?php echo $TextLanguage->lang('notification'); ?></span>
										<!-- <span>Banner</span> -->
									</a>
									<i class="icon-chevron-down"></i>
									<i class="icon-chevron-right"></i>
								</div><!-- trigger -->
								<div class="content-slide-detail">

									<div class="mod_news-list">
										 <?php
										$i = 0;
										foreach ($notification->result() as $r)
										{   
											?>
											<span class="link-text" style="font-size:12px;">- <a href="javascript:;" onclick="callLightbox('<?php echo base_url(); ?>panel/notification/<?php echo $r->id ?>',600,400);"><?php echo $r->title ?></a> <i>(<?php echo date('d/m/Y H:i:s',$r->last_create) ?>)</i> </span><br />
											<?php  
											$i++;
										}
										?> 
									</div><!-- mod_news-list -->
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
 
});

$( document ).ready(function() 
{
    <?php
	if($_SESSION['panel_style_template_id'] == '0')
	{
		?>
		callLightbox('<?php echo base_url(); ?>panel/intro',920,600); 
		<?php	
	}
	else if($_SESSION['panel_style_logo_img1'] == '')
	{
		?>
		callLightbox('<?php echo base_url(); ?>panel/intro/2',920,600); 
		<?php	
	}
	else if($_SESSION['panel_style_info_title'] == '' || $_SESSION['panel_style_info_keyword'] == '' || $_SESSION['panel_style_info_description'] == '')
	{
		?>
		callLightbox('<?php echo base_url(); ?>panel/intro/3',920,600); 
		<?php	
	}
	?>
	
	<?php   
	if($_SESSION['panel_web_disk_over'] == 1)
	{ 
		?>
		callLightbox('<?php echo base_url(); ?>panel/file_manager',1150,520); 
		<?php
	} 
	?>  
});
</script>

@include('manage.include.responsive') 