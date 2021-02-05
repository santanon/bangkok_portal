<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>
@include('manage.include.header') 

<?php
$this_path = 'upload/tmp/';
$this_image = $_SESSION['crop_image_thumb'];

$ori_size = getimagesize('./' . $this_path . '' . $this_image . '');
$ori_w = $ori_size[0];
$ori_h = $ori_size[1];
?>
 
<script type="text/javascript" src="<?php echo base_url() ?>assets/panel/js/jquery-pack.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/panel/js/jquery.imgareaselect-0.3.min.js"></script> 
<script type="text/javascript">
function preview(img, selection) 
{ 
	var scaleX = <?php echo $size_w ?> / selection.width; 
	var scaleY = <?php echo $size_h ?> / selection.height; 
	
	$('#thumbnail + div > img').css({ 
		width: Math.round(scaleX * <?php echo $ori_w ?>) + 'px', 
		height: Math.round(scaleY * <?php echo $ori_h ?>) + 'px',
		marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px', 
		marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
	});
	$('#x1').val(selection.x1);
	$('#y1').val(selection.y1);
	$('#x2').val(selection.x2);
	$('#y2').val(selection.y2);
	$('#w').val(selection.width);
	$('#h').val(selection.height);
} 

$(document).ready(function () 
{ 
	$('#save_thumb').click(function() {
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
			alert("You must make a selection first");
			return false;
		}else{
			return true;
		}
	});
});  
$(window).load(function () 
{ 
	$('#thumbnail').imgAreaSelect({ aspectRatio: '1:<?php echo $size_h/$size_w;?>', onSelectChange: preview }); 
}); 
</script>
	 
	<div align="center">
    
    <img src="<?php echo base_url().$this_path.$this_image ?>" style="float: left; cursor:move; margin-right: 10px; border:1px solid #999;" id="thumbnail" />  
	
    <div style="float:left; position:relative; overflow:hidden; width:<?php echo $size_w;?>px; height:<?php echo $size_h;?>px; border:1px solid #999; display:none;">
    <img src="<?php echo base_url().$this_path.$this_image ?>" style="position: relative; " />
    </div>
     
    <br style="clear:both;"/>
	<form name="thumbnail" action="http://127.0.0.1:8000/manage-admin/list?m=image_upload&step3=1" method="post">
    @csrf <!-- {{ csrf_field() }} -->
	<input type="hidden" name="x1" value="" id="x1" />
	<input type="hidden" name="y1" value="" id="y1" />
	<input type="hidden" name="x2" value="" id="x2" />
	<input type="hidden" name="y2" value="" id="y2" />
	<input type="hidden" name="w" value="" id="w" />
	<input type="hidden" name="h" value="" id="h" />
	<br />
    
    <span class="btn round big gray"><input type="button" value="<?php echo $TextLanguage->lang('back'); ?>" onClick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=image_upload&<?php echo @$redirect ?>=1';" class="fontfacetext"></span> 
    <span class="btn round big blue"><input type="submit" id="save_thumb" class="fontfacetext" value="<?php echo $TextLanguage->lang('next'); ?>"></span> 
    <?php
	if(isset($redirect))
	{
		?><input type="hidden" name="redirect" value="<?php echo $redirect ?>" /><?php
	}
	?>
	</form>
     
	</div>  
    
  
@include('manage.include.scripts')

 

@include('manage.include.responsive')
