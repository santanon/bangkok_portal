<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header')  

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'Cover Page';
	</script>

<script type="text/javascript">
function check_form()    
{ 
	/*if(document.getElementById('html_head_info').value == '')
	{
		document.getElementById('html_head_info').focus();
		return false;
	} 
	if(document.getElementById('css_info').value == '')
	{
		document.getElementById('css_info').focus();
		return false;
	} 
	if(document.getElementById('html_body_info').value == '')
	{
		document.getElementById('html_body_info').focus();
		return false;
	} 
	if(document.getElementById('html_foot_info').value == '')
	{
		document.getElementById('html_foot_info').focus();
		return false;
	}*/ 														
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/cover_submit?m=setting_html_css">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>  
		  <tr>
			<th width="120" valign="top" style="padding-top:10px;">Cover Page  </th>
			<td style="color:#666">
            
				<?php
				$this_name = 'info';
				$this_value = @$edit_copyright_info_en;
				?>
				@include('manage.include.input_texteditor')

			</td>
		</tr>

	 
        
          
		@include('manage.include.date_start_end_add')            
        
           
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

                </td>
            </tr>
		
		
	</tbody>
</table>
</form>
 
@include('manage.include.main_form_footer') 