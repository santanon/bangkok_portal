<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

<script type="text/javascript">
function check_form()
{
	if(document.getElementById('email').value == '')
	{
		document.getElementById('email').focus();
		return false;
	} 
	if(document.getElementById('p').value == '')
	{
		document.getElementById('p').focus();
		return false;
	}   																				
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/setting_account/change_email_submit">
<table>
	<tbody>
		 
		 <tr>
			<th width="120"><?php echo $TextLanguage->lang('current_email'); ?> <span style="color:red">*</span></th>
			<td>
			 <b><?php echo $_SESSION['panel_profile_email']; ?></b>
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('new_email'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="email" name="email" type="text" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('new_email'); ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('current_password'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="p" name="p" type="password" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('current_password'); ?>"> 
			</td>
		</tr>
	
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/' ?>';"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
 
@include('manage.include.main_form_footer') 