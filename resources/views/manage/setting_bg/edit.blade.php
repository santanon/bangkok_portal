<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header') 

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'รูปพื้นหลังทั้งหมด';
	</script>

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

<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_bg_submit?m=setting_bg">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>
		 
         
     
<?php 
$all_list = array('mod_activities','mod_banner','mod_contact','mod_download','mod_faq','mod_gallery','mod_news','mod_poll','mod_question','mod_search','mod_sitemap','mod_texteditor');   
$all_list_name = array('activities','banner','contactus','download','faq','gallery','news','poll','question','search','sitemap','texteditor');  

$run = 0;
foreach($all_list as $all_list_item)
{
	$this_mod_input = $all_list_item; 
	$each_name = $all_list_name[$run];
	?>
    <tr>
    <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang($each_name); ?></th>
    <td> 
	<?php 
	$this_name = $this_mod_input;
	$this_w = '1280';
	$this_h = '741';
	$this_limit = '5';
	$this_value = $ro[0]->{$this_mod_input};
	?>
	@include('manage.include.input_file_tools_arr') 
    </td>
    </tr> 
    <?php
	$run = $run + 1;
} 
?>
  
            
         
            
            
            
            
		
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
			 
			</td>
		</tr>
		
		
	</tbody>
</table>
</form>

<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2;   
	$.fancybox.close();
} 
</script>
 
@include('manage.include.main_form_footer') 