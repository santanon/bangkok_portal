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
		if(document.getElementById('url').value == '')
		{
			document.getElementById('url').focus();
			return false;
		}  																				
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
				<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('image_url'); ?> <span style="color:red">*</span><br /><span style="font-size:9px; font-weight:normal;!important"><?php echo $TextLanguage->lang('image_size_logo'); ?></span></th>
				<td>
                
                <!--<input id="url" name="url" type="text" class="sm-input" style="width:400px" placeholder="http://xxx" <?php
                if($_SESSION['panel_style_logo_type'] == 2)
                {
                    ?> value="<?php echo $_SESSION['panel_style_logo_img1'] ?>" <?php
                } 
                ?> > <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/url',1120,640);return false;" /> 
                <br />  
                <?php echo $TextLanguage->lang('image_size_logo'); ?> <br /><br />--> 
                
                <?php
				$this_field = 'url';
				?>
                <iframe id="list_rec_<?php echo $this_field ?>" src="/upload_tools/manage.php?m=<?php echo $config_mod ?>&f=<?php echo $this_field ?>" width="100%" height="500" scrolling="yes" frameborder="0"></iframe> 
                
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