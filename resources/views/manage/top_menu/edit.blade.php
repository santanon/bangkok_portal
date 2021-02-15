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
                <td><input value="<?php echo $edit_title ?>" name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('name'); ?>">&nbsp;&nbsp;
                    <input value="<?php echo $edit_en_title ?>" name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('name'); ?>">
                </td>
            </tr>  
            
            
            
             
            
             <tr>
                <th width="120" valign="top" style="padding-top:10px"><?php echo $TextLanguage->lang('type'); ?></th>
                <td style="line-height:27px">
                         
<!-- <input name="page_type" type="radio" id="page_type_1" value="group" onclick="show_it('group');" <?php if($edit_page_type == 'group'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_1"><?php echo $TextLanguage->lang('group_page') ?></label><br /> -->

<input name="page_type" type="radio" id="page_type_2" value="texteditor" onclick="show_it('tr_texteditor');"  <?php if($edit_page_type == 'texteditor'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_2"><?php echo $TextLanguage->lang('texteditor_page') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_3" value="url" onclick="show_it('tr_url');" <?php if($edit_page_type == 'url'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_3"><?php echo $TextLanguage->lang('url_link') ?></label><br /> 
 
<input name="page_type" type="radio" id="page_type_4" value="news" onclick="show_it('tr_news');" <?php if($edit_page_type == 'news'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_4"><?php echo $TextLanguage->lang('news') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_5" value="calendar" onclick="show_it('tr_calendar');" <?php if($edit_page_type == 'calendar'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_5"><?php echo $TextLanguage->lang('activities_calendar') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_6" value="faq" onclick="show_it('tr_faq');" <?php if($edit_page_type == 'faq'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_6"><?php echo $TextLanguage->lang('faq') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_7" value="gallery" onclick="show_it('tr_gallery');" <?php if($edit_page_type == 'gallery'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_7"><?php echo $TextLanguage->lang('image_gallery') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_8" value="banner" onclick="show_it('tr_banner');" <?php if($edit_page_type == 'banner'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_8"><?php echo $TextLanguage->lang('banner_link') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_9" value="download" onclick="show_it('tr_download');" <?php if($edit_page_type == 'download'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_9"><?php echo $TextLanguage->lang('download_file') ?></label><br /> 
 
<input name="page_type" type="radio" id="page_type_10" value="question" onclick="show_it('tr_question');" <?php if($edit_page_type == 'question'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_10"><?php echo $TextLanguage->lang('question_form') ?></label><br /> 

<input name="page_type" type="radio" id="page_type_11" value="poll" onclick="show_it('tr_poll');" <?php if($edit_page_type == 'poll'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_11"><?php echo $TextLanguage->lang('poll_vote') ?></label><br /> 
 
<!--<input name="page_type" type="radio" id="page_type_12" value="webboard" onclick="show_it('tr_webboard');" <?php if($edit_page_type == 'webboard'){ ?> checked="checked" <?php } ?>/>&nbsp;
<label class="input-label" for="page_type_12"><?php echo $TextLanguage->lang('webboard1') ?></label><br />  -->
                    
                </td>
            </tr> 
            
<script>
function hide_all()
{
	document.getElementById('tr_texteditor').style.display = 'none';
	document.getElementById('tr_texteditor_2').style.display = 'none';
	document.getElementById('tr_texteditor_3').style.display = 'none';
	document.getElementById('tr_url').style.display = 'none';
	document.getElementById('tr_url_2').style.display = 'none';
	document.getElementById('tr_news').style.display = 'none';
	document.getElementById('tr_calendar').style.display = 'none';
	document.getElementById('tr_faq').style.display = 'none';
	document.getElementById('tr_gallery').style.display = 'none';
	document.getElementById('tr_banner').style.display = 'none';
	document.getElementById('tr_download').style.display = 'none';
	document.getElementById('tr_question').style.display = 'none';
	document.getElementById('tr_poll').style.display = 'none';
	document.getElementById('tr_webboard').style.display = 'none';  
	document.getElementById('tr_main_bg').style.display = 'none';  
}
function show_it(v1)
{
	hide_all();
	document.getElementById(v1).style.display = '';
	if(v1 == 'tr_texteditor')
	{
		document.getElementById('tr_texteditor_2').style.display = '';
		document.getElementById('tr_texteditor_3').style.display = '';
		document.getElementById('tr_main_bg').style.display = '';
	}
	if(v1 == 'tr_url')
	{
		document.getElementById('tr_url_2').style.display = '';
	}
}
</script>    
            
<tr id="tr_texteditor">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('texteditor'); ?>&nbsp; <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg" /> </th>
<td> 
<?php
$this_name = 'info';
$this_value = @$edit_info;
?>
@include('manage.include.input_texteditor') 
</td>
</tr> 

<tr id="tr_texteditor_2">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('texteditor'); ?>&nbsp; <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg" /></th>
<td>
<?php
$this_name = 'en_info';
$this_value = @$edit_en_info;
?>
@include('manage.include.input_texteditor')
</td>
</tr> 

<tr id="tr_texteditor_3">
                <th width="120"><?php echo $TextLanguage->lang('comment_and_rating'); ?></th>
                <td>
                 <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio11" value="1" <?php if($edit_can_review == '1'){ ?> checked="checked" <?php } ?>> 
                <label class="input-label" for="test-radio11"><?php echo $TextLanguage->lang('yes'); ?></label></div>&nbsp;&nbsp;
                <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio12" value="0" <?php if($edit_can_review <> '1'){ ?> checked="checked" <?php } ?>> 
                <label class="input-label" for="test-radio12"><?php echo $TextLanguage->lang('no'); ?></label></div>&nbsp;&nbsp; 
                </td>
            </tr>   

<tr id="tr_main_bg">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('background'); ?><br><span style="font-size:12px;font-weight:normal;">กว้าง 1280 px, สูง 741 px </span></th>
<td>

<?php 
$this_name = 'img1';
$this_w = '1280';
$this_h = '741';
$this_limit = '1';
$this_value = $edit_img1;
?>
@include('manage.include.input_file_tools')
 
</td>
</tr> 

       
<tr id="tr_url">
<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('url'); ?></th>
<td>


	<input value="<?php echo $edit_url ?>" name="url" type="text" class="sm-input--flag-th" id="url" style="width:235px" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=url',500,640);return false;" />
	<br><br>
	<input value="<?php echo $edit_en_url ?>" name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:235px" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=en_url',500,640);return false;" />

	 
</td>
</tr>

<tr id="tr_url_2">
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
<tr id="tr_news">   
<th width="120"><?php echo $TextLanguage->lang('news') ?></th>
<td>
<select class="selectric" name="page_type_news">  
<?php  
foreach ($Portal_website_news_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?></option> 
	<?php 
} 
?> 

</select>
</td>
</tr>
<tr id="tr_calendar">
<th width="120"><?php echo $TextLanguage->lang('activities_calendar') ?></th>
<td>
<select class="selectric" name="page_type_calendar">  
<?php  
foreach ($Portal_website_activities_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select> 
</td>
</tr> 
<tr id="tr_faq">
<th width="120"><?php echo $TextLanguage->lang('faq') ?></th>
<td>
<select class="selectric" name="page_type_faq">  
<?php  
foreach ($Portal_website_faq_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select> 
</td>
</tr>
<tr id="tr_gallery">   
<th width="120"><?php echo $TextLanguage->lang('image_gallery') ?></th>
<td>
<select class="selectric" name="page_type_gallery">  
<?php  
foreach ($Portal_website_gallery_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select> 
</td>
</tr>
<tr id="tr_banner"> 
<th width="120"><?php echo $TextLanguage->lang('banner_link') ?></th>
<td>
<select class="selectric" name="page_type_banner">  
<?php  
foreach ($Portal_website_banner_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select> 
</td>
</tr>
<tr id="tr_download">   
<th width="120"><?php echo $TextLanguage->lang('download_file') ?></th>
<td>
<select class="selectric" name="page_type_download">  
<?php  
foreach ($Portal_website_download_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select>  
</td>
</tr>
<tr id="tr_question">
<th width="120"><?php echo $TextLanguage->lang('question_form') ?></th>
<td>
<select class="selectric" name="page_type_question">  
<?php  
foreach ($Portal_website_question_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select>
</td>
</tr>
<tr id="tr_poll">
<th width="120"><?php echo $TextLanguage->lang('poll_vote') ?></th>
<td>
<select class="selectric" name="page_type_poll">  
<?php  
foreach ($Portal_website_poll_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 

</select>
</td>
</tr>
<tr id="tr_webboard">
<th width="120"><?php echo $TextLanguage->lang('webboard1') ?></th>
<td>
<select class="selectric" name="page_type_webboard"> 
<?php  
foreach ($Portal_website_webboard_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($edit_data_id == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 
</select>
</td>
</tr>
             
<script>
hide_all();
</script>               
            
           <tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
            </tr>  
            
        
<script>
show_it('tr_<?php echo $edit_page_type ?>');
</script>           
         

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