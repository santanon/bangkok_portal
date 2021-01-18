<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

<script type="text/javascript">
function check_form()    
{
	if(document.getElementById('profile_name').value == '')
	{
		document.getElementById('profile_name').focus();
		return false;
	} 
	if(document.getElementById('profile_lastname').value == '')
	{
		document.getElementById('profile_lastname').focus();
		return false;
	}   
	if(document.getElementById('profile_mobile').value == '')
	{
		document.getElementById('profile_mobile').focus();
		return false;
	} 
	if(document.getElementById('profile_idcard').value == '')
	{
		document.getElementById('profile_idcard').focus();
		return false;
	} 																				
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/setting_profile/edit_submit">
<table>
	<tbody> 
    
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('profile_name'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="profile_name" name="profile_name" type="text" class="sm-input" style="width:235px" value="<?php echo @$_SESSION['panel_profile_name'] ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('profile_lastname'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="profile_lastname" name="profile_lastname" type="text" class="sm-input" style="width:235px" value="<?php echo @$_SESSION['panel_profile_lastname'] ?>"> 
			</td>
		</tr>
        
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('profile_email'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="profile_email" name="profile_email" type="text" class="sm-input" style="width:235px" value="<?php echo @$_SESSION['panel_profile_email'] ?>" disabled="disabled">   
            &nbsp; <span class="link-text"><a href="<?php echo base_url() ?>panels/setting_account/change_email">Change E-mail</a></span> 
			</td>
		</tr>
        
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('profile_mobile'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="profile_mobile" name="profile_mobile" type="text" class="sm-input" style="width:235px" value="<?php echo @$_SESSION['panel_profile_mobile'] ?>"> 
			</td>
		</tr>
        
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('profile_idcard'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="profile_idcard" name="profile_idcard" type="text" class="sm-input" style="width:235px" value="<?php echo @$_SESSION['panel_profile_idcard'] ?>"> 
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