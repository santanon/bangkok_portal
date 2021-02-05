<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

 

<?php
$r = $list_template;
?>
 
	<div class="form-box">
		<table width="900" border="1">
			<tbody>
			<?php
			$run = 0;
			for($i=1;$i<=22;$i++)
			{
				?>
				 <tr>
					<?php
					for($ii=1;$ii<=1;$ii++)
					{
						?>
						 <td> 
                         
                         <table width="100%" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                                 <td width="1%" align="center"><img src="<?php echo base_url(); ?>upload/admin/<?php echo $r[$run]->img1 ?>" style="border:1px solid #CCC;" width="145">
                                 <br /><br />
                                 <span class="btn round big blue"><input onclick="
                                 
                                 if(confirm('<?php echo $TextLanguage->lang('choose_this_template'); ?>?'))
                                 { 
                                 	if(confirm('<?php echo $TextLanguage->lang('use_template_background'); ?>?'))
                                    { 
                                        window.location = 'http://127.0.0.1:8000/manage-admin/set_template?m=template_list&id=<?php echo $r[$run]->id ?>&id2=1';  
                                    }
                                    else
                                    { 
                                        window.location = 'http://127.0.0.1:8000/manage-admin/set_template?m=template_list&id=<?php echo $r[$run]->id ?>&id2=0';  
                                    } 
                                 }
                                 
                                 " type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('use'); ?>"></span>
                                 </td>
                                 <td valign="top">
								 <b><?php echo $r[$run]->title ?></b><br /><br />
                                 <?php echo $r[$run]->info ?><br /><br />  
                                <?php echo $TextLanguage->lang('use_count') ?> : <?php echo $r[$run]->point ?> <br />
                                 <?php echo $TextLanguage->lang('last_use') ?> : <?php echo $ci_obj->util->time_elapsed_string($r[$run]->last_update); ?>
                                 
                                 <br /><br /> <br /><br /><br />
                                 <div align="right">
                                 <span class="btn round big blue"><input onclick="callLightbox('<?php echo base_url() ?><?php echo $_SESSION['panel_web_url'] ?>/index/<?php echo $r[$run]->id ?>',350,'100%');return false;" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('preview_mobile'); ?>"></span>
                                 <span class="btn round big blue"><input onclick="callLightbox('<?php echo base_url() ?><?php echo $_SESSION['panel_web_url'] ?>/index/<?php echo $r[$run]->id ?>',850,'100%');return false;" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('preview_tablet'); ?>"></span>
                                 <span class="btn round big blue"><input onclick="callLightbox('<?php echo base_url() ?><?php echo $_SESSION['panel_web_url'] ?>/index/<?php echo $r[$run]->id ?>','100%','100%');return false;" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('preview_pc'); ?>"></span>
                                  
                                 </div>
                                 </td>
                             </tr>
                         </table>                         
						 
                         </td>
						<?php
						$run++;
					}
					?> 
				</tr>
				<?php
			}
			?> 
			   
			</tbody>
		</table>
		 
	</div>
 
	
 
 
@include('manage.include.main_form_footer') 