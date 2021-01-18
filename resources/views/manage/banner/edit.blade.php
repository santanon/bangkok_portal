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
        } 
		/*
		 if(document.getElementById('img1').value == '')
        {
            document.getElementById('img1').focus();
            return false;
        } 
		*/
        if(document.getElementById('url').value == '')
        {
            document.getElementById('url').focus();
            return false;
        } 
		if(document.getElementById('en_url').value == '')
        {
            document.getElementById('en_url').focus();
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
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td><input name="title" type="text" class="sm-input" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('name'); ?>" value="<?php echo $edit_title ?>"> 
                </td>
            </tr> 
 
            <tr>
                <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
                <td>
                <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/img1',1120,640);return false;" /><br />
                 <?php echo $TextLanguage->lang('image_size_banner'); ?><br />
                <img width="300" id="img1_preview" style="border:1px solid #CCC;" src="<?php echo $edit_img1 ?>" />
                <br><input type="text" name="img1" id="img1" value="<?php echo $edit_img1 ?>" />
                
                <br /><input type="checkbox" name="img1_delete" value="1" /> <?php echo $TextLanguage->lang('delete'); ?>
                </td>
            </tr>
             
            
            
            <tr>
                <th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('url'); ?></th>
                <td>
                    <input name="url" type="text" class="sm-input--flag-th" id="url" style="width:235px" placeholder="http://" value="<?php echo $edit_url ?>">
                     <br /><input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/lh/form/url',500,640);return false;" /> <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/url',1120,640);return false;" /> <br /><br />
                     
                    <input name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:235px" placeholder="http://" value="<?php echo $edit_en_url ?>">
                    <br /><input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/lh/form/en_url',500,640);return false;" /> <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/en_url',1120,640);return false;" /> <br /><br />
                </td>
            </tr>
            
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('url_target'); ?></th>
                <td> 
                    <div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio1" value="_top" <?php if($edit_url_target == '_top'){ ?> checked="checked" <? } ?>> 
                    <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('redirect'); ?></label>
                    </div>&nbsp;&nbsp;
                    
                    <div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio2" value="_blank" <?php if($edit_url_target == '_blank'){ ?> checked="checked" <? } ?>> 
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



			<?php /*<tr>
                <th width="120"><?php echo $TextLanguage->lang('comment_and_rating'); ?></th>
                <td>
                 <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio11" value="1" <?php if($edit_can_review == '1'){ ?> checked="checked" <?php } ?>> 
                <label class="input-label" for="test-radio11"><?php echo $TextLanguage->lang('yes'); ?></label></div>&nbsp;&nbsp;
                <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio12" value="0" <?php if($edit_can_review <> '1'){ ?> checked="checked" <?php } ?>> 
                <label class="input-label" for="test-radio12"><?php echo $TextLanguage->lang('no'); ?></label></div>&nbsp;&nbsp; 
                </td>
            </tr> */ ?>


           
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
    
<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2; 
	document.getElementById(v1+'_preview').src = v2; 
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