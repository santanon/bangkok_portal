<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

<script type="text/javascript">
function check_form()
{
	if(document.getElementById('p1').value == '')
	{
		document.getElementById('p1').focus();
		return false;
	} 
	if(document.getElementById('p2').value == '')
	{
		document.getElementById('p2').focus();
		return false;
	} 
	if(document.getElementById('p3').value == '')
	{
		document.getElementById('p3').focus();
		return false;
	} 
	if(document.getElementById('p2').value !== document.getElementById('p3').value)
	{
		alert('<?php echo $TextLanguage->lang('new_password_not_match'); ?>');
		document.getElementById('p3').focus();
		return false;
	}																				
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/change_password_submit">
<table>
	<tbody>
		 
	<?php
	if(@$_SESSION['panel_login_web_user_login'] == "1")
	{
		?>
        <tr>
		    <th>ชื่อ - นามสกุล</th>
		    <td><?php echo $_SESSION['panel_login_web_user_name'] ?></td>
		    </tr>
		<tr>
		    <th>สังกัด</th>
		    <td><?php echo $_SESSION['panel_login_web_user_section'] ?></td>
		    </tr>
        <?
	}
	?>	 
		
            
            
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('current_password'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="p1" name="p1" type="password" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('current_password'); ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('new_password'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="p2" name="p2" type="password" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('new_password'); ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('confirm_new_password'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="p3" name="p3" type="password" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('confirm_new_password'); ?>"> 
			</td>
		</tr>
		
	   
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/'; ?>';"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
											
@include('manage.include.main_form_footer')