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
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/send_submit">
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
			 $this_name = 'info'
			 ?>
			 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'><?php echo @$read_info ?></textarea>
			 <script type="text/javascript"> 
			 CKEDITOR.replace( '<?php echo $this_name ?>' , 
			 { 
				enterMode : CKEDITOR.ENTER_BR,
				shiftEnterMode: CKEDITOR.ENTER_BR 
			 }); 
			 </script>
			 
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
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/' . $config_mod . '' ?>';"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
                                                
@include('manage.include.main_form_footer') 