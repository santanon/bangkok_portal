<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 
 
<div align="center" style="font-size:12px;">

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
<input type="hidden" name="redirect" value="edit_logo" />
</form> 
  
</div>
  
@include('manage.include.scripts')

<script> 
 
</script>

@include('manage.include.responsive')
