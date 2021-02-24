<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header') 

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'เปลี่ยนอีเมล์';
	</script>


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
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/change_email_submit?m=setting_account">
@csrf <!-- {{ csrf_field() }} -->
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
			<input id="email" name="email" type="text" class="sm-input" style="width:40%" placeholder="<?php echo $TextLanguage->lang('new_email'); ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('current_password'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="p" name="p" type="password" class="sm-input" style="width:40%" placeholder="<?php echo $TextLanguage->lang('current_password'); ?>"> 
			</td>
		</tr>
	
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
		
			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
 
@include('manage.include.main_form_footer') 