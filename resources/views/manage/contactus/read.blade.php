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
														<td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $this_cat; ?> / <?php echo $this_page; ?> </span></td>
														<td valign="middle" width="76">
															 
														</td>
													</tr>
												</table>
											</div>  
										</div><!-- header -->                                   
                                        <div class="content">
                                        คำแนะนำการใช้งาน<br /><br />

                                        
                                        </div>
                                        <div class="content">
											<div class="form-box">
											<table>
												<tbody> 
													<tr>
														<th width="120"><?php echo $TextLanguage->lang('subject'); ?></th>
														<td><?php echo $read_title; ?></td>
													</tr>
													<tr>
														<th width="120" valign="top" style="padding-top:10px"><?php echo $TextLanguage->lang('message'); ?></th>
														<td><?php echo $read_info; ?></td>
													</tr>  
                                                    <tr>
														<th width="120"><?php echo $TextLanguage->lang('contact_name'); ?></th>
														<td><?php echo $read_contact_name; ?></td>
													</tr>
                                                     <tr>
														<th width="120"><?php echo $TextLanguage->lang('contact_email'); ?></th>
														<td><?php echo $read_contact_email; ?></td>
													</tr>
                                                     <tr>
														<th width="120"><?php echo $TextLanguage->lang('contact_address'); ?></th>
														<td><?php echo $read_contact_address; ?></td>
													</tr>
                                                     <tr>
														<th width="120"><?php echo $TextLanguage->lang('contact_tel'); ?></th>
														<td><?php echo $read_contact_tel; ?></td>
													</tr>
                                                    <tr>
														<th width="120"><?php echo $TextLanguage->lang('date'); ?></th>
														<td><?php echo date('d/m/Y [H:i:s]',$read_last_create); ?></td>
													</tr>
                                                    <tr>
														<th width="120"><?php echo $TextLanguage->lang('ip_address'); ?></th>
														<td><?php echo $read_ip; ?></td>
													</tr>
												</tbody>
											</table>
										</div> 
											 
										</div><!-- content -->
                                          
									</div><!-- right -->
                                    
                                    
                                    
                                    
									<div class="clearfix"></div>
								</div>
                                
                                <div align="center"><br />
                                
                                <span class="btn round big green"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('print') ?>" onclick="window.print();"></span>
                                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('close') ?>" onclick="parent.jQuery.fancybox.close();"></span>
                                </div> 
                                
                                
							</div><!-- content-slide-box -->

						</div><!-- content-slide-container -->
					</div>
                    
				</div>
			</div><!-- main container -->

		</div>

@include('manage.include.scripts') 
@include('manage.include.responsive') 
 