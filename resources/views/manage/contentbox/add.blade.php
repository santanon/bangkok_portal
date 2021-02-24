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
                <th width="120"><?php echo $TextLanguage->lang('name'); ?> <span style="color:red">*</span></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder='<?php echo $TextLanguage->lang('name'); ?>'>&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder='<?php echo $TextLanguage->lang('name'); ?>'>
                </td>
            </tr> 
            
            
             <tr>
                <th width="120"><?php echo $TextLanguage->lang('box_number'); ?></th>
                <td>
                 <select class="selectric" name="box_number" id="box_number" onchange="show_it(this.value);"> 
                 <option value="1">1</option> 
                 <option value="2">2</option> 
                 <option value="3">3</option> 
                 <option value="4">4</option> 
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
                    <select class="selectric" name="box<?php echo $i ?>" id="box_number" style="width:500px;"> 
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
    
<script>
function update_img(v1,v2)
{ 
	document.getElementById(v1).value = v2;  
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
show_it('1');
</script>
    
@include('manage.include.main_form_footer') 