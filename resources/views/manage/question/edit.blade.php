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
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/edit_submit">
    <table>
        <tbody>
        
        <tr>
                <th width="120"><?php echo $config_dropdown_title; ?></th>
                <td> 
                
                    <select class="selectric" name="cat_id" id="cat_id"> 
                    <?php 
                    foreach ($list_cat->result() as $row_cat)
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
                <td><input value="<?php echo $edit_title ?>" name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('title'); ?>">&nbsp;&nbsp;
                    <input value="<?php echo $edit_en_title ?>" name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('title'); ?>">
                </td>
            </tr>  
            
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('type'); ?></th>
                <td>
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio1" value="textbox" onclick="hide_choice();" <?php if($edit_input_type == 'textbox'){ ?>checked="checked"<?php } ?>> 
                <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('textbox'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio2" value="textarea" onclick="hide_choice();" <?php if($edit_input_type == 'textarea'){ ?>checked="checked"<?php } ?>> 
                <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('textarea'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio3" value="checkbox" onclick="hide_choice();" <?php if($edit_input_type == 'checkbox'){ ?>checked="checked"<?php } ?>> 
                <label class="input-label" for="test-radio3"><?php echo $TextLanguage->lang('checkbox'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio4" value="radio" onclick="show_choice();" <?php if($edit_input_type == 'radio'){ ?>checked="checked"<?php } ?>> 
                <label class="input-label" for="test-radio4"><?php echo $TextLanguage->lang('radio'); ?></label>
                </div>&nbsp;&nbsp;
                
                <div class="align-box" style="width:110px;">
                <input name="input_type" type="radio" id="test-radio5" value="dropdown" onclick="show_choice();" <?php if($edit_input_type == 'dropdown'){ ?>checked="checked"<?php } ?>> 
                <label class="input-label" for="test-radio5"><?php echo $TextLanguage->lang('dropdown'); ?></label>
                </div>&nbsp;&nbsp;
                 
                </td>
            </tr>
            
            <tr id="this_hide_1" style="display:none;">
                <th width="120"><?php echo $TextLanguage->lang('all_choice'); ?></th>
                <td><input value="<?php echo $edit_input_detail ?>" name="input_detail" type="text" class="sm-input" id="input_detail" style="width:500px" placeholder="<?php echo $TextLanguage->lang('all_choice_2'); ?>"> 
                    
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
<?php 
if($edit_input_type == 'radio' || $edit_input_type == 'dropdown')
{
	?>
	show_choice();
	<?php
}
?>
</script>
            
             
            
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/' . $config_mod . '' ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
    
    
@include('manage.include.main_form_footer') 