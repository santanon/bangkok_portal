<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 
 
<div align="center" style="font-size:12px;">

<?php  
if($_SESSION['panel_style_logo_img1'] == '')
{
	?>
    <form enctype="multipart/form-data" action="<?php echo base_url() ?>panels/image_upload/step2" id="form_step_1" method="post">
    <br />
    <br /> 
    <br />
    <br />
    <br />
    <br />  
    <br />
    <br />
    <br /> 
    <br />
    <br /> 
    
    <div align="center"> 
    <span class="btn big green"><a class="fontfacetext" href="javascript:;" onclick='$("#file1").trigger("click");'><?php echo $TextLanguage->lang('upload_a_photo_from_your_computer'); ?></a></span>
    <br /><br />
    <?php echo $TextLanguage->lang('system_image_crop'); ?> 
    <br /><br />
<?php echo $TextLanguage->lang('image_size_logo'); ?> 
    </div>
    
    <input type="file" name="file1" id="file1" size="30" onchange="document.getElementById('form_step_1').submit();" style="visibility:hidden" /> 
    
    <input type="submit" name="upload" value="<?php echo $TextLanguage->lang('upload'); ?>" style="width:100px; visibility:hidden" />
    </form> 
    <?php
}
else
{
	?>
	<div class="form-box">
    	<br /><br />
		<table align="center">
			<tbody>
				<tr> 
					<td align="center">
					<img src="<?php echo base_url(); ?>upload/web/<?php echo $_SESSION['panel_style_logo_img1'] ?>" style="border:1px solid #CCC;"> 
					<br /><br /> 
					<span class="btn round big gray"><input onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ window.location = '<?php echo base_url(); ?>panels/image_upload/reset_logo';}" type="reset" class="fontfacetext" value="<?php echo $TextLanguage->lang('reset_logo') ?>"></span> 
					</td>
				</tr> 
			</tbody>
		</table>
		 
	</div>
	<?php 
}
?>
  
</div>
  
@include('manage.include.scripts')

<script> 
 
</script>
 
@include('manage.include.responsive') 