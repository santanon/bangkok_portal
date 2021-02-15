<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

<script type="text/javascript">
function check_form()
{
	if(document.getElementById('username').value == '')
	{
		document.getElementById('username').focus();
		return false;
	} 
	if(document.getElementById('title').value == '')
	{
		document.getElementById('title').focus();
		return false;
	} 
	if(CKEDITOR.instances.info.getData() == '')
	{
		CKEDITOR.instances.info.focus();
		return false;
	}																					
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/send_submit?m=<?php echo $config_mod ?>">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('from'); ?></th>
			<td>
			<?php echo $_SESSION['panel_profile_name'] ?> <?php echo $_SESSION['panel_profile_lastname'] ?>
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('to'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="username" name="username" type="text" class="sm-input" style="width:235px" placeholder="<?php echo $TextLanguage->lang('username'); ?>" value="<?php echo @$read_username ?>"> 
			</td>
		</tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('subject'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="title" name="title" type="text" class="sm-input" style="width:99%" value="<?php echo @$read_title ?>"> 
			</td>
		</tr>
		 
		
		<tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <span style="color:red">*</span></th>
			<td> 

					<?php
                    $this_name = 'info';
                    $this_value = @$read_info;
                    ?>
                    @include('manage.include.input_texteditor')
            
			 
			</td>
		</tr>
		
		
		<tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('file_attachment'); ?></th>
			<td>
			<input id="file1" name="file1" type="file"> 
			<br /> <?php echo $TextLanguage->lang('system_file_upload'); ?>
			</td>
		</tr>
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('send'); ?>"></span>&nbsp;
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
                                                
@include('manage.include.main_form_footer') 