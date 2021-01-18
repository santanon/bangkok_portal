<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 

<br /><br /><br />

<div align="center"><img src="<?php echo base_url().'upload/tmp/'.$_SESSION['crop_image_thumb'] ?>" /><br /><br />

<form name="thumbnail" action="<?php echo base_url() ?>panels/image_upload/step4" method="post">  
<span class="btn round big gray"><input type="button" value="<?php echo $TextLanguage->lang('back'); ?>" onClick="window.location = '<?php echo base_url() ?>panels/image_upload/<?php echo @$redirect ?>'" class="fontfacetext"></span> 
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
