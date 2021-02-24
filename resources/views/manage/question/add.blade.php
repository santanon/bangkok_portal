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
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/add_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
        
        <tr>
                <th width="120"><?php echo $config_dropdown_title; ?></th>
                <td> 
                
                    <select class="selectric" name="cat_id" id="cat_id"> 
                    <?php 
                    foreach ($list_cat as $row_cat)
                    {   
                        ?>
                        <option value="<?php echo $row_cat->id; ?>" <?php if($this_cat_list == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?></option> 
                        <?php
                    } 
                    ?> 
                    </select>
                
                </td>
            </tr>
            
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('title'); ?></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('title'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('title'); ?>">
                </td>
            </tr> 
            
   
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('type'); ?></th>
                <td>
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio1" value="textbox" onclick="hide_choice();" checked="checked"> 
                <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('textbox'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio2" value="textarea" onclick="hide_choice();"> 
                <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('textarea'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio3" value="checkbox" onclick="hide_choice();"> 
                <label class="input-label" for="test-radio3"><?php echo $TextLanguage->lang('checkbox'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio4" value="radio" onclick="show_choice();"> 
                <label class="input-label" for="test-radio4"><?php echo $TextLanguage->lang('radio'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio5" value="dropdown" onclick="show_choice();"> 
                <label class="input-label" for="test-radio5"><?php echo $TextLanguage->lang('dropdown'); ?></label>
                </div>&nbsp;&nbsp;
                 
                </td>
            </tr>
            
            <tr id="this_hide_1" style="display:none;">
                <th width="120"><?php echo $TextLanguage->lang('all_choice'); ?></th>
                <td><input name="input_detail" type="text" class="sm-input" id="input_detail" style="width:500px" placeholder="<?php echo $TextLanguage->lang('all_choice_2'); ?>"> 
                    
                </td>
            </tr> 
            
<script>
function show_choice()
{
	document.getElementById('this_hide_1').style.display = '';	
}
function hide_choice()
{
	document.getElementById('this_hide_1').style.display = 'none';	
}
</script>
			  
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