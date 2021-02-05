@include('manage.include.header') 
<style>
table{ width:100%; }
</style>
	<div id="se-wrapper">
		<div id="page-container" class="no-bg-slider"> 
			<div id="se-maincontainer-wrapper" class="page01">
				<div id="se-maincontainer"> 
					<div id="page1col">
						<div id="content-slide-container">  <a href="list?m=<?php echo $config_mod ?>" style="color:#000; font-size:12px;"><< ย้อนกลับ</a>
							<div class="content-slide-box expanded">  
								<div class="content-slide-detail"> 
									<div class="right"> 
 										@include('manage.include.content_head')    
                                        <div class="desc-box">
                                        <?php echo $config_header_info; ?>
                                        </div> 
										<div class="content"> 
											<div class="form-box">