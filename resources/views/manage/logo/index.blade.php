<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header') 

<script>
parent.document.getElementById('modal_full_span').innerHTML = 'โลโก้เว็บไซต์' 
</script>
 
<script type="text/javascript">
function check_form()
{
	/*if(document.getElementById('url').value == '')
	{
		document.getElementById('url').focus();
		return false;
	}  */																				
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/url_submit?m=<?php echo $config_mod ?>">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>
			
		<tr>
			<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('image_url'); ?> <span style="color:red">*</span><br><span style="font-size:12px;font-weight:normal;">กว้าง 325 px, สูง 86 px </span></th>
			<td>
			<?php 
			$this_name = 'url';
			$this_w = '325';
			$this_h = '86';
			$this_limit = '1';
			$this_value = $_SESSION['panel_style_logo_img1'];
			?>
			@include('manage.include.input_file_tools')
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