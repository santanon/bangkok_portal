<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
    function check_form()
    { 
       if(document.getElementById('title').value == '' && document.getElementById('en_title').value == '')
        {
            document.getElementById('title').focus();
            return false;
        }                                                                              
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
        
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td>
                <input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>" value="<?php echo $edit_title ?>"> 
                <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>" value="<?php echo $edit_en_title ?>"> 
                </td>
            </tr> 
            
            
            <tr>
                <th width="120">เบอร์โทร</th>
                <td>
                <input value="<?php echo $edit_info ?>" name="info" type="text" class="sm-input" id="info" style="width:40%" placeholder="0-2222-2222" maxlength="11">  
                </td>
            </tr> 
            <tr>
                <th width="120">เบอร์ต่อ (ภายใน)</th>
                <td>
                <input value="<?php echo $edit_en_info ?>" name="en_info" type="text" class="sm-input" id="info" style="width:40%" placeholder="1234" maxlength="11">  
                </td>
            </tr> 
            <tr>
                <th width="120">Facebook (URL)</th>
                <td>
                <input value="<?php echo $edit_file1 ?>" name="file1" type="text" class="sm-input" id="file1" style="width:40%" placeholder="http://www.facebook.com/xxxxx" maxlength="11">  
                </td>
            </tr> 
            <tr>
                <th width="120">Twitter (URL)</th>
                <td>
                <input value="<?php echo $edit_en_file1 ?>" name="en_file1" type="text" class="sm-input" id="en_file1" style="width:40%" placeholder="https://twitter.com/xxxxx" maxlength="11">  
                </td>
            </tr> 
              
              
            

<?php
$this_data['edit_date_set'] = $edit_date_set;
$this_data['edit_date_start'] = $edit_date_start;
$this_data['edit_date_end'] = $edit_date_end;
?>  
@include('manage.include.date_start_end_edit')  




			 
            
           
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
    
<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2;  
	$.fancybox.close();
} 
</script>
<?php
if($edit_date_set == '1')
{
	?>
	<script type="text/javascript">
	show_link2('1');
	</script>
	<?php	
}
if($edit_date_set == '0')
{
	?>
	<script type="text/javascript">
	show_link2('2');
	</script>
	<?php	
}
?>
    
@include('manage.include.main_form_footer') 