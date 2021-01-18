<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header')  
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
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/setting_html_css/edit_submit">
<table>
	<tbody>  
		  <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('html_head_info'); ?>  </th>
			<td style="color:#666">
            
            &lt;head&gt;<br />
            <textarea  id="html_head_info" name="html_head_info" style="width:500px; font-family:'Courier New'; color:#333333" rows="15"><?php echo @$_SESSION['panel_style_html_head_info'] ?></textarea> <br />  
            &lt;/head&gt;
            <br /><br />
			</td>
		</tr>
         <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('css_info'); ?>  </th>
			<td style="color:#666">
            &lt;style&gt;<br />
            <textarea  id="css_info" name="css_info" style="width:500px; font-family:'Courier New'; color:#333333" rows="15"><?php echo @$_SESSION['panel_style_css_info'] ?></textarea>   
			<br />  
            &lt;/style&gt;
            <br /><br />
            </td>
		</tr>
         <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('html_body_info'); ?>  </th>
			<td style="color:#666"> 
             &lt;body&gt;<br />
            <textarea  id="html_body_info" name="html_body_info" style="width:500px; font-family:'Courier New'; color:#333333" rows="15"><?php echo @$_SESSION['panel_style_html_body_info'] ?></textarea> 
           <br />  
           ...
            <br /><br />
			</td>
		</tr>
         <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('html_foot_info'); ?>  </th>
			<td style="color:#666"> 
            
            <textarea  id="html_foot_info" name="html_foot_info" style="width:500px; font-family:'Courier New'; color:#333333" rows="15"><?php echo @$_SESSION['panel_style_html_foot_info'] ?></textarea>  
            <br />  
            &lt;/body&gt; 
			</td>
		</tr> 
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
 
@include('manage.include.main_form_footer') 