<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
     function check_form()
    { 
        if(document.getElementById('title').value == '')
        {
            document.getElementById('title').focus();
            return false;
        } /*
		 if(document.getElementById('img1').value == '')
        {
            document.getElementById('img1').focus();
            return false;
        } */                                                                       
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
            <?php
            if(strpos($edit_title,'|') > -1)
            {
                $arr_edit_title = explode('|',$edit_title);
            }
            else
            {
                $arr_edit_title[0] = $edit_title;
                $arr_edit_title[1] = '';
            } 
            if(strpos($edit_en_title,'|') > -1)
            {
                $arr_edit_en_title = explode('|',$edit_en_title);
            }
            else
            {
                $arr_edit_en_title[0] = $edit_en_title;
                $arr_edit_en_title[1] = '';
            } 
            ?>
            <tr>
                <th width="120" valign="top"><?php echo $TextLanguage->lang('name'); ?></th>
                <td>
                <input value="<?php echo $arr_edit_title[0] ?>" class="sm-input--flag-th" id="title1" name="title[]" type="text" class="sm-input" id="title1" style="width:40%" placeholder="<?php echo $TextLanguage->lang('txt_line_1'); ?>"> <br />
                <input value="<?php echo $arr_edit_title[1] ?>" class="sm-input--flag-th" id="title2" name="title[]" type="text" class="sm-input" id="title2" style="width:40%" placeholder="<?php echo $TextLanguage->lang('txt_line_2'); ?>">
                <br /><br />
                <input value="<?php echo $arr_edit_en_title[0] ?>" class="sm-input--flag-en" id="en_title1" name="en_title[]" type="text" class="sm-input" id="en_title1" style="width:40%" placeholder="<?php echo $TextLanguage->lang('txt_line_1'); ?>"><br />
                <input value="<?php echo $arr_edit_en_title[1] ?>" class="sm-input--flag-en" id="en_title2" name="en_title[]" type="text" class="sm-input" id="en_title2" style="width:40%" placeholder="<?php echo $TextLanguage->lang('txt_line_2'); ?>">
                </td>
            </tr> 
 
            <tr>
                <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
                <td>
                    <?php 
                    $this_name = 'img1';
                    $this_w = '130';
                    $this_h = '90';
                    $this_limit = '1';
                    $this_value = $edit_img1;
                    ?>
                    @include('manage.include.input_file_tools')
 
                </td>
            </tr>
             
            
            
            <tr>
                <th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('url'); ?></th>
                <td>
                
                    <input value="<?php echo $edit_url ?>" name="url" type="text" class="sm-input--flag-th" id="url" style="width:40%" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=url',500,640);return false;" />
	<br><br>
	<input value="<?php echo $edit_en_url ?>" name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:40%" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=en_url',500,640);return false;" />
                     
                </td>
            </tr>
            
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('url_target'); ?></th>
                <td> 
                    <div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio1" value="_top" <?php if($edit_url_target == '_top'){ ?> checked="checked" <?php } ?>> 
                    <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('redirect'); ?></label>
                    </div>&nbsp;&nbsp;
                    
                    <div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio2" value="_blank" <?php if($edit_url_target == '_blank'){ ?> checked="checked" <?php } ?>> 
                    <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('new_window'); ?></label>
                    </div>&nbsp;&nbsp; 
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