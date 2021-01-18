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
                <th width="120"><?php echo $TextLanguage->lang('name'); ?> <span style="color:red">*</span></th>
                <td>
<input name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder='<?php echo $TextLanguage->lang('name'); ?>' value="<?php echo $edit_title ?>">&nbsp;&nbsp;
<input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder='<?php echo $TextLanguage->lang('name'); ?>' value="<?php echo $edit_en_title ?>">
                </td>
            </tr> 
             
  <tr>
                <th width="120"><?php echo $TextLanguage->lang('box_number'); ?></th>
                <td>
                 <select class="selectric" name="box_number" id="box_number" onchange="show_it(this.value);"> 
                 <option value="1" <?php if($edit_box_number == '1'){ ?> selected="selected" <?php } ?>>1</option> 
                 <option value="2" <?php if($edit_box_number == '2'){ ?> selected="selected" <?php } ?>>2</option> 
                 <option value="3" <?php if($edit_box_number == '3'){ ?> selected="selected" <?php } ?>>3</option> 
                 <option value="4" <?php if($edit_box_number == '4'){ ?> selected="selected" <?php } ?>>4</option> 
                 </select>
                </td>
            </tr> 
            
            <tr>
                <th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('box_data'); ?></th>
                <td>
                
                <?php
				for($i=1;$i<=4;$i++)
				{ 
					?>
                    <div class="align-box" style="width:160px; display:none;" id="div<?php echo $i ?>"> 
                    <select class="selectric" name="box<?php echo $i ?>" id="box<?php echo $i ?>" style="width:500px;"> 
					<?php
                    echo $main_str;
                    ?>    
                    </select> 
                    </div><br />
                    <?php
				}	
				?>
                
                 
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
function hide_all()
{
	document.getElementById('div1').style.display = 'none';
	document.getElementById('div2').style.display = 'none';
	document.getElementById('div3').style.display = 'none';
	document.getElementById('div4').style.display = 'none';
}
function show_it(v1)
{
	hide_all();
	if(v1 == '1')
	{
		document.getElementById('div1').style.display = '';	
	}
	if(v1 == '2')
	{
		document.getElementById('div1').style.display = '';	
		document.getElementById('div2').style.display = '';	
	}
	if(v1 == '3')
	{
		document.getElementById('div1').style.display = '';	
		document.getElementById('div2').style.display = '';	
		document.getElementById('div3').style.display = '';	
	}
	if(v1 == '4')
	{
		document.getElementById('div1').style.display = '';	
		document.getElementById('div2').style.display = '';	
		document.getElementById('div3').style.display = '';	
		document.getElementById('div4').style.display = '';	
	} 
}
show_it('<?php echo $edit_box_number ?>');

var x = document.getElementById("box1");  
for (i = 0; i < x.length; i++) 
{ 
	if(x.options[i].value == '<?php echo $edit_box1 ?>')
	{
		x.options[i].selected = true; 
	} 
}
var x = document.getElementById("box2");  
for (i = 0; i < x.length; i++) 
{ 
	if(x.options[i].value == '<?php echo $edit_box2 ?>')
	{
		x.options[i].selected = true; 
	} 
}
var x = document.getElementById("box3");  
for (i = 0; i < x.length; i++) 
{ 
	if(x.options[i].value == '<?php echo $edit_box3 ?>')
	{
		x.options[i].selected = true; 
	} 
}
var x = document.getElementById("box4");  
for (i = 0; i < x.length; i++) 
{ 
	if(x.options[i].value == '<?php echo $edit_box4 ?>')
	{
		x.options[i].selected = true; 
	} 
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