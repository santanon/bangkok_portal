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
														<td valign="middle"><span class="header-text fontfacetext-bold"><?php echo $TextLanguage->lang('information') ?></span></td>
														<td valign="middle" width="76">
															 
														</td>
													</tr>
												</table>
											</div>  
										</div><!-- header -->                                   
                                        <div class="content">
                                       <?php echo $TextLanguage->lang('help_comment_information') ?>
                                        </div>
                                        <div class="content">
											<div class="form-box">
											<table>
												<tbody> 
													<tr>
														<th width="120"><?php echo $TextLanguage->lang('no.view'); ?></th>
														<td><?php echo number_format($edit_click_view) ?></td>
													</tr>
													 <tr>
														<th width="120"><?php echo $TextLanguage->lang('no.vote'); ?></th>
														<td><?php echo number_format($edit_vote_good+$edit_vote_bad) ?> ( Yes:<?php echo number_format($edit_vote_good) ?>, No:<?php echo number_format($edit_vote_bad) ?> )</td>
													</tr>
                                                    
                                                    
<?php
if(count($list_comment) > 0)
{
	?>
     <tr >
														<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('comment'); ?></th>
														<td valign="top">
                                                        
                                                        
<?php   
$run = 1;
foreach ($list_comment as $row_comment)
{    
	?>
	<table width="500" border="1" cellspacing="0" cellpadding="0">
	<tr style="background-color:#004e6c; color:#FFF">
	<td><?php echo $TextLanguage->lang('comment') ?>#<?php echo $run ?> [<a onclick="if(!confirm('<?php echo $TextLanguage->lang('confirm') ?>')){ return false; }" style="color:#FFF" href="http://127.0.0.1:8000/manage-admin/comment_delete?m=<?php echo $config_mod ?>&id=<?php echo $row_comment->id ?>&id2=<?php echo $edit_id ?>&main_type=<?php echo $row_comment->main_type ?>"><b><?php echo $TextLanguage->lang('delete') ?></b></a>] <?php if($row_comment->status <> '1'){ ?>  &nbsp;  <b style="color:#FF4040">( <?php echo $TextLanguage->lang('delete_report') ?> )</b> <?php } ?> </td>
	</tr>
	<tr>
	<td><?php echo $row_comment->title ?></td>
	</tr>
	<tr>
	<td><?php echo $TextLanguage->lang('post_by') ?> : <b><?php echo $row_comment->post_user ?></b> &nbsp; IP : <b><?php echo $row_comment->ip ?></b><br /><?php echo $TextLanguage->lang('last_post') ?> : <b><?php echo $CustomHelper->time_elapsed_string($row_comment->last_create); ?></b> ( <?php echo date('d/m/y [H:i:s]',$row_comment->last_create) ?> )</td> 
	</tr>
	</table><br />
	<?php
	$run++;
} 	
?>                                                      
                                                        
  
                                                        </td>
													</tr>
                                                     <tr>
														<th width="120"><?php echo $TextLanguage->lang('no.comment'); ?></th>
														<td><?php echo number_format($run-1) ?> </td>
													</tr>
    <?php
} 
?><tr>
														 
                                                    
                                                   
												</tbody>
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