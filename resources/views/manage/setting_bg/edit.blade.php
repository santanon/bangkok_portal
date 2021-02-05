<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 

<script type="text/javascript">
function check_form()
{ 																			
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
 
<?php 
$ro = $list_cat;
?>  

<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=setting_bg">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>
		 
         
     
<?php 
$all_list = array('mod_activities','mod_banner','mod_contact','mod_download','mod_faq','mod_gallery','mod_member','mod_news','mod_poll','mod_question','mod_search','mod_sitemap','mod_texteditor','mod_webboard');   
$all_list_name = array('activities','banner','contactus','download','faq','gallery','member','news','poll','question','search','sitemap','texteditor','webboard1');  
     
while($each = each($all_list))
{
	$this_mod_input = $each['value']; 
	$each_name = each($all_list_name);
	?>
    <tr>
    <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang($each_name['value']); ?></th>
    <td>
    <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/<?php echo $this_mod_input ?>',1120,640);return false;" /> <?php if(strlen($ro[0]->{$this_mod_input}) > 5){ ?><input type="button" value="<?php echo $TextLanguage->lang('reset'); ?>" onclick="if(confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))window.location = 'http://127.0.0.1:8000/manage-admin/reset_bg?m=setting_bg&data=<?php echo $each[1] ?>';" /><?php } ?><br />
    <?php echo $TextLanguage->lang('image_size_setting_bg'); ?><br />      
    <img width="150" id="<?php echo $this_mod_input ?>_preview" style="border:1px solid #CCC;" src="<?php echo $ro[0]->{$this_mod_input} ?>" />
    <input type="text" name="<?php echo $this_mod_input ?>" id="<?php echo $this_mod_input ?>" value="<?php echo $ro[0]->{$this_mod_input} ?>" />
    </td>
    </tr> 
    <?php
} 
?>
  
            
         
            
            
            
            
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.history.back();"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>

<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2; 
	document.getElementById(v1+'_preview').src = v2; 
	$.fancybox.close();
} 
</script>
 
@include('manage.include.main_form_footer') 