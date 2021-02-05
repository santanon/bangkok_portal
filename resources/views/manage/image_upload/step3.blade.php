<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 

<br /><br /><br />

<div align="center"><img src="<?php echo base_url().'upload/tmp/'.$_SESSION['crop_image_thumb'] ?>" /><br /><br />

<form name="thumbnail" action="http://127.0.0.1:8000/manage-admin/list?m=image_upload&step4=1" method="post"> 
@csrf <!-- {{ csrf_field() }} --> 
<span class="btn round big gray"><input type="button" value="<?php echo $TextLanguage->lang('back'); ?>" onClick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=image_upload&<?php echo @$redirect ?>=1'" class="fontfacetext"></span> 
<?php
if(isset($redirect))
{
	?><input type="hidden" name="redirect" value="<?php echo $redirect ?>" /><?php
}
?>
<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('finish'); ?>"></span>    
</form>   
 
</div>
  
@include('manage.include.scripts')
@include('manage.include.responsive')
