<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 
 
<table>
	<tbody>
		 
		 <tr>
			<th width="120" valign="top" style="padding-top:20px;"><?php echo $TextLanguage->lang('template'); ?></th>
			<td>
			

<?php
$r = $list_template->result();
?>            
            
<div class="form-box">
		<table align="center">
			<tbody>
				<tr> 
					<td align="center">
					<img src="<?php echo base_url(); ?>upload/admin/<?php echo $r[0]->img1 ?>" style="border:1px solid #CCC; width:300px;">
					<br />
				  #<?php echo $r[0]->title ?>
					<br /><br /> 
					<span class="btn round big gray"><input onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ window.location = '<?php echo base_url(); ?>panels/template_my/reset_it';}" type="reset" class="fontfacetext" value="<?php echo $TextLanguage->lang('reset_template') ?>"></span>   <span class="btn round big blue"><input onclick="window.location = '<?php echo base_url(); ?>panels/contentbox_cat';" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('custom_layout_box') ?>"></span> 
					</td>
				</tr> 
			</tbody>
		</table>
		 
	</div>
            
            
            
			</td>
		</tr>
		 
		
	</tbody>
</table> 
 
@include('manage.include.main_form_footer') 