<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header') 

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'ตั้งค่าเว็บไซต์';
	</script>


<script type="text/javascript">
function check_form()
{
	if(document.getElementById('web_name').value == '')
	{
		document.getElementById('web_name').focus();
		return false;
	}
	if(document.getElementById('web_name_en').value == '')
	{
		document.getElementById('web_name_en').focus();
		return false;
	}  
	if(document.getElementById('info_keyword').value == '')
	{
		document.getElementById('info_keyword').focus();
		return false;
	}
	if(document.getElementById('info_description').value == '')
	{
		document.getElementById('info_description').focus();
		return false;
	} 																			
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=setting_website">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>  
    	<tr>
			<th width="120"><?php echo $TextLanguage->lang('website_type'); ?><span style="color:red">*</span></th>
			<td>

         
<select class="selectric" name="web_type" id="web_type" style="width:500px;"> 
<?php 
foreach ($list_cat as $row_cat)
{   
	?>
	<option value="<?php echo $row_cat->id; ?>" <?php if($_SESSION['panel_web_type'] == $row_cat->id){ ?> selected="selected" <?php } ?>><?php echo $row_cat->title; ?></option> 
	<?php
} 
?> 
</select> 
            
			</td>
		</tr>
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('website_name'); ?>  <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg"> <span style="color:red">*</span></th>
			<td>
			<input id="web_name" name="web_name" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_web_name'] ?>"> 
           
			</td>
		</tr>
        
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('website_name'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg"> <span style="color:red">*</span></th>
			<td>
			<input id="web_name_en" name="web_name_en" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_web_name_en'] ?>"> 
             
			</td>
		</tr>
        
    <!--    <tr>
			<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('website_description'); ?>  </th>
			<td> 
            <textarea  id="web_desc" name="web_desc" style="width:500px" rows="5"><?php echo @$_SESSION['panel_web_desc'] ?></textarea> 
			</td>
		</tr>   -->
         
         
        
        <!-- <tr>
			<th width="120"><?php echo $TextLanguage->lang('slogan_website'); ?> 1 &nbsp;<img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg"></th>
			<td>
			<input id="slogan_1" name="slogan_1" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_style_slogan_1'] ?>"> 
			</td>
		</tr>
        
         <tr>
			<th width="120"><?php echo $TextLanguage->lang('slogan_website'); ?> 2 &nbsp;<img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg"></th>
			<td>
			<input id="slogan_2" name="slogan_2" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_style_slogan_2'] ?>"> 
			</td>
		</tr>
        
        
         <tr>
			<th width="120"><?php echo $TextLanguage->lang('slogan_website'); ?> 1 &nbsp;<img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg"> </th>
			<td>
			<input id="slogan_1_en" name="slogan_1_en" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_style_slogan_1_en'] ?>"> 
			</td>
		</tr>
        
         <tr>
			<th width="120"><?php echo $TextLanguage->lang('slogan_website'); ?> 2 &nbsp;<img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg"> </th>
			<td>
			<input id="slogan_2_en" name="slogan_2_en" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_style_slogan_2_en'] ?>"> 
			</td>
		</tr> -->
        
        
        <tr>
			<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('meta_keyword'); ?> <span style="color:red">*</span></th>
			<td>
            <textarea  id="info_keyword" name="info_keyword" style="width:500px" rows="5"><?php echo @$_SESSION['panel_style_info_keyword'] ?></textarea> 
			</td>
		</tr>
        
        <tr>
			<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('meta_description'); ?> <span style="color:red">*</span></th>
			<td>  
             <textarea  id="info_description" name="info_description" style="width:500px" rows="5"><?php echo @$_SESSION['panel_style_info_description'] ?></textarea> 
			</td>
		</tr>
 
        <!-- <tr>
			<th width="120"><?php echo $TextLanguage->lang('language_start'); ?> <span style="color:red">*</span></th>
			<td> 
            
<div class="align-box" style="width:110px;"> 
    <input name="lang_start" type="radio" id="lang_start1" value="TH" <?php if(@$_SESSION['panel_style_lang_start'] == 'TH'){ ?> checked="checked" <?php } ?>/> 
    <label class="input-label" for="lang_start1"><?php echo $TextLanguage->lang('thai'); ?></label>
</div>&nbsp;&nbsp;
<div class="align-box" style="width:110px;"> 
    <input name="lang_start" type="radio" id="lang_start2" value="EN" <?php if(@$_SESSION['panel_style_lang_start'] == 'EN'){ ?> checked="checked" <?php } ?>  />
    <label class="input-label" for="lang_start2"><?php echo $TextLanguage->lang('english'); ?></label>
</div> 
             
			</td>
		</tr>
        
        <tr>
			<th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('block_ip'); ?></th>
			<td> 
            <textarea  id="block_ip" name="block_ip" style="width:500px" rows="5" placeholder='127.0.0.1, x.x.x.x, x.x.x.x'><?php echo @$_SESSION['panel_style_block_ip'] ?></textarea>  
			</td>
		</tr>
  
        <tr>
			<th width="120"><?php echo $TextLanguage->lang('website_status'); ?> <span style="color:red">*</span></th>
			<td> 
             
<div class="align-box" style="width:110px;"> 
    <input name="close_status" type="radio" id="close_status1" value="2" <?php if(@$_SESSION['panel_style_close_status'] <> '1'){ ?> checked="checked" <?php } ?> onclick="hide_close_type();hide_close_info();hide_close_redirect(); document.getElementById('close_type1').checked = true;" /> 
    <label class="input-label" for="close_status1"><?php echo $TextLanguage->lang('open'); ?></label>
</div>&nbsp;&nbsp;
<div class="align-box" style="width:110px;"> 
    <input name="close_status" type="radio" id="close_status2" value="1" <?php if(@$_SESSION['panel_style_close_status'] == '1'){ ?> checked="checked" <?php } ?> onclick="show_close_type();show_close_info()" />
    <label class="input-label" for="close_status2"><?php echo $TextLanguage->lang('close'); ?></label>
</div>     
             
			</td>
		</tr>
        
        <tr id="hide_close_type" style="display:none;">
			<th width="120"><?php echo $TextLanguage->lang('close_type'); ?> <span style="color:red">*</span></th>
			<td> 
            
<div class="align-box" style="width:110px;"> 
    <input name="close_type" type="radio" id="close_type1" value="page" <?php if(@$_SESSION['panel_style_close_type'] == 'page'){ ?> checked="checked" <?php } ?> onclick="show_close_info();hide_close_redirect();" /> 
    <label class="input-label" for="close_type1"><?php echo $TextLanguage->lang('page1'); ?></label>
</div>&nbsp;&nbsp;
<div class="align-box" style="width:110px;"> 
    <input name="close_type" type="radio" id="close_type2" value="link" <?php if(@$_SESSION['panel_style_close_type'] == 'link'){ ?> checked="checked" <?php } ?> onclick="hide_close_info();show_close_redirect();" />
    <label class="input-label" for="close_type2"><?php echo $TextLanguage->lang('redirect'); ?></label>
</div> 
            
 
			</td>
		</tr>
        
         
        
        <tr id="hide_close_info" style="display:none;">
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('close_info'); ?>  </th>
			<td> 


				<?php
				$this_name = 'close_info';
				$this_value =  @$_SESSION['panel_style_close_info'];
				?>
				@include('manage.include.input_texteditor')

 
			 
			</td>
		</tr>
      
        
         <tr id="hide_close_redirect" style="display:none;">
			<th width="120"><?php echo $TextLanguage->lang('close_redirect'); ?> </th>
			<td>
			<input id="close_redirect" name="close_redirect" type="text" class="sm-input" style="width:500px" value="<?php echo @$_SESSION['panel_style_close_redirect'] ?>"> 
			</td>
		</tr> -->
         
         
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
			<!-- <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.history.back();"></span> -->

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>


<script>
function show_close_type()
{
	document.getElementById('hide_close_type').style.display = '';	
}
function hide_close_type()
{
	document.getElementById('hide_close_type').style.display = 'none';	
}
function show_close_info()
{ 
	document.getElementById('hide_close_info').style.display = '';	 
}
function hide_close_info()
{
	document.getElementById('hide_close_info').style.display = 'none';	 	
}
function show_close_redirect()
{  	
	document.getElementById('hide_close_redirect').style.display = '';	
}
function hide_close_redirect()
{ 
	document.getElementById('hide_close_redirect').style.display = 'none';	
}
</script>

<?php
if($_SESSION['panel_style_close_status']  == '1')
{
	?>
    <script>
	show_close_type();
	</script>
    <?php
	
	if($_SESSION['panel_style_close_type']  == 'page')
	{
		?>
		<script>
		show_close_info();
		</script>
		<?php
	}
	
	if($_SESSION['panel_style_close_type']  == 'link')
	{
		?>
		<script>
		show_close_redirect();
		</script>
		<?php
	}
}
?>


 
@include('manage.include.main_form_footer') 