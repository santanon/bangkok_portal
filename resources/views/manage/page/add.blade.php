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
                <?php
				$r = $list_cat;
				echo $r[0]->title;
				?>
                <?php
				echo $list_str_navi;
				?>
                 <input type="hidden" name="cat_id" value="<?php echo $r[0]->id ?>" />
                 <input type="hidden" name="page_id" value="<?php echo $_SESSION[$config_mod.'_group_page'] ?>" />
                </td>
            </tr>   
            
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>">
                </td>
            </tr> 
            
             <tr>
                <th width="120" valign="top" style="padding-top:10px"><?php echo $TextLanguage->lang('type'); ?></th>
                <td style="line-height:27px">
                    
                    <?php 
					if(@$this_hide_group == '1')
					{
						?>
                        
                        <?php
					}
					else
					{
						?>
                        <input name="page_type" type="radio" id="page_type_1" value="group" checked="checked" onclick="show_it('group');"/>&nbsp;
               			<label class="input-label" for="page_type_1"><?php echo $TextLanguage->lang('group_page') ?></label><br /> 
                        <?php
					}
					?>
                         
                    
                    
                    <input name="page_type" type="radio" id="page_type_2" value="texteditor" onclick="show_it('tr_texteditor');"/>&nbsp;
               		<label class="input-label" for="page_type_2"><?php echo $TextLanguage->lang('texteditor_page') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_3" value="url" onclick="show_it('tr_url');"/>&nbsp;
               		<label class="input-label" for="page_type_3"><?php echo $TextLanguage->lang('url_link') ?></label><br /> 
                     
                    <input name="page_type" type="radio" id="page_type_4" value="news" onclick="show_it('tr_news');"/>&nbsp;
               		<label class="input-label" for="page_type_4"><?php echo $TextLanguage->lang('news') ?></label><br /> 
                     
                    <input name="page_type" type="radio" id="page_type_5" value="calendar" onclick="show_it('tr_calendar');"/>&nbsp;
               		<label class="input-label" for="page_type_5"><?php echo $TextLanguage->lang('activities_calendar') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_6" value="faq" onclick="show_it('tr_faq');"/>&nbsp;
               		<label class="input-label" for="page_type_6"><?php echo $TextLanguage->lang('faq') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_7" value="gallery" onclick="show_it('tr_gallery');"/>&nbsp;
               		<label class="input-label" for="page_type_7"><?php echo $TextLanguage->lang('image_gallery') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_8" value="banner" onclick="show_it('tr_banner');"/>&nbsp;
               		<label class="input-label" for="page_type_8"><?php echo $TextLanguage->lang('banner_link') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_9" value="download" onclick="show_it('tr_download');"/>&nbsp;
               		<label class="input-label" for="page_type_9"><?php echo $TextLanguage->lang('download_file') ?></label><br /> 
                     
                    <input name="page_type" type="radio" id="page_type_10" value="question" onclick="show_it('tr_question');"/>&nbsp;
               		<label class="input-label" for="page_type_10"><?php echo $TextLanguage->lang('question_form') ?></label><br /> 
                    
                    <input name="page_type" type="radio" id="page_type_11" value="poll" onclick="show_it('tr_poll');"/>&nbsp;
               		<label class="input-label" for="page_type_11"><?php echo $TextLanguage->lang('poll_vote') ?></label><br /> 

					<input name="page_type" type="radio" id="page_type_13" value="vdo" onclick="show_it('tr_vdo');"/>&nbsp;
               		<label class="input-label" for="page_type_13">VDO</label><br />
                     
                    <!-- <input name="page_type" type="radio" id="page_type_12" value="webboard" onclick="show_it('tr_webboard');"/>&nbsp;
               		<label class="input-label" for="page_type_12"><?php echo $TextLanguage->lang('webboard1') ?></label><br /> -->
                    
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
	document.getElementById('tr_vdo').style.display = 'none';
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
                    $this_value = '';
                    ?>
                    @include('manage.include.input_texteditor')
 

 

</td>
</tr> 

<tr id="tr_texteditor_2">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('texteditor'); ?>&nbsp; <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg" /></th>
<td> 


	<?php
                    $this_name = 'en_info';
                    $this_value = '';
                    ?>
                    @include('manage.include.input_texteditor')
 

</td>
</tr> 

<tr id="tr_texteditor_3">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('comment_and_rating'); ?></th>
<td> 
<div class="align-box" style="width:110px;">
<input name="can_review" type="radio" id="test-radio11" value="1"> 
<label class="input-label" for="test-radio11">Yes</label></div>
&nbsp;
<div class="align-box" style="width:110px;">
<input name="can_review" type="radio" id="test-radio12" value="2" checked="checked"> 
<label class="input-label" for="test-radio12">No</label></div><br /><br />
</td>
</tr>  

<tr id="tr_main_bg">
<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('background'); ?></th>
<td>


	<?php 
$this_name = 'img1';
$this_w = '130';
$this_h = '90';
$this_limit = '1';
$this_value = '';
?>
@include('manage.include.input_file_tools')

 
</td>
</tr> 
       
<tr id="tr_url">
<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('url'); ?></th>
<td>

	
	<input name="url" type="text" class="sm-input--flag-th" id="url" style="width:40%" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=url',500,640);return false;" />
	<br><br>
	<input name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:40%" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=en_url',500,640);return false;" />

	
</td>
</tr>

<tr id="tr_url_2">
<th width="120"><?php echo $TextLanguage->lang('url_target'); ?></th>
<td> 
<div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio1" value="_top" checked="checked" > 
<label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('redirect'); ?></label>
</div>&nbsp;&nbsp;

<div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio2" value="_blank"> 
<label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('new_window'); ?></label>
</div>&nbsp;&nbsp; 
</td>
</tr>
<tr id="tr_news">   
<th width="120"><?php echo $TextLanguage->lang('news') ?></th>
<td>
<select class="selectric" name="page_type_news"> 
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_news_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?></option> 
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_activities_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_faq_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_gallery_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_banner_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_download_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_question_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_poll_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
<?php  
foreach ($Portal_website_webboard_cat_model as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
	?> 
	</option> 
	<?php 
} 
?> 
</select>
</td>
</tr>


<tr id="tr_vdo">   
	<th width="120">VDO</th>
	<td>
	<select class="selectric" name="page_type_vdo"> 
	<option value="new" selected="selected">+ <?php echo $TextLanguage->lang('create_new') ?></option>
	<?php  
	foreach ($Portal_website_vdo_cat_model as $row_cat)
	{   
		?>
		<option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> <?php   
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
<?php 
if(@$this_hide_group == '1')
{
	?>
	document.getElementById('page_type_2').checked = true;
	show_it('tr_texteditor');
	<?php
} 
?>
</script>               
            
           <tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
            </tr>  

			<tr>   
				<th width="120">ITA</th>
				<td>
				<select name="ita" style="height: 25px;"> 
				<option value="" selected="selected">- เลือก -</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 9.1 ข้อมูลพื้นฐาน">
				<option value="ข้อมูลพื้นฐาน">ข้อมูลพื้นฐาน</option>
				<option value="ข่าวประชาสัมพันธ์">ข่าวประชาสัมพันธ์</option>
				<option value="การปฏิสัมพันธ์ข้อมูล">การปฏิสัมพันธ์ข้อมูล</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 9.2 การบริหารงาน">
				<option value="แผนดำเนินงาน">แผนดำเนินงาน</option>
				<option value="การให้บริการ">การให้บริการ</option>
				<option value="การปฏิบัติงาน">การปฏิบัติงาน</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 9.3 การบริหารเงินงบประมาณ">
				<option value="แผนการใช้จ่ายงบประมาณประจำปี">แผนการใช้จ่ายงบประมาณประจำปี</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 9.4 การบริหาร และพัฒนาทรัพยากรบุคคล">
				<option value="การบริหาร และพัฒนาทรัพยากรบุคคล">การบริหาร และพัฒนาทรัพยากรบุคคล</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 9.5 การส่งเสริมความโปร่งใส">
			    <option value="การจัดการเรื่องร้องเรียนการทุจริต">การจัดการเรื่องร้องเรียนการทุจริต</option>
				<option value="การเปิดโอกาสให้เกิดการมีส่วนร่วม">การเปิดโอกาสให้เกิดการมีส่วนร่วม</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 10.1 การดำเนินการเพื่อป้องกันการทุจริต">
				<option value="เจตจำนงสุจริตของผู้บริหาร">เจตจำนงสุจริตของผู้บริหาร</option>
				<option value="การประเมินความเสี่ยงเพื่อป้องกันการทุจริต">การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</option>
				<option value="แผนปฏิบัติการป้องกันการทุจริต">แผนปฏิบัติการป้องกันการทุจริต</option>
				<option value="การเสริมสร้างวัฒนธรรมองค์กร">การเสริมสร้างวัฒนธรรมองค์กร</option>
				<optgroup label="ตัวชี้วัดย่อยที่ 10.2 มาตรการภายในเพื่อป้องกันการทุจริต">
				<option value="มาตรการภายในเพื่อส่งเสริมความโปร่งใส และป้องกันการทุจริต">มาตรการภายในเพื่อส่งเสริมความโปร่งใส และป้องกันการทุจริต</option>
				</select> 
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