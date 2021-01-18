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
       /*  
		 if(document.getElementById('img1').value == '')
        {
            document.getElementById('img1').focus();
            return false;
        } */    
		/*    
        if(CKEDITOR.instances.info.getData() == '')
		{
			CKEDITOR.instances.info.focus();
			return false;
		}	
		if(CKEDITOR.instances.en_info.getData() == '')
		{
			CKEDITOR.instances.en_info.focus();
			return false;
		}	
          */                                                                          
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/add_submit">
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
        
 <tr >
    <th width="120"><?php echo $TextLanguage->lang('date'); ?></th>
    <td><div class="align-box" style="width:120px;">
    <input name="date_news" id="date_news" type="text" class="sm-input" style="width:150px" readonly="readonly" value="<?php echo date('d-m-Y') ?>"> 
    </div>
    <script>
$(function() 
{
	$( "#date_news" ).datepicker({ dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true }); 
});
</script> 
    </td>
</tr>  
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('title'); ?></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('title'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('title'); ?>">
                </td>
            </tr> 
            
   <tr>
                <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
                <td>
                <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/img1',1120,640);return false;" /><br />
                <?php echo $TextLanguage->lang('image_size_news'); ?><br />
                <img width="300" id="img1_preview" style="border:1px solid #CCC;" />
                <br><input type="text" name="img1" id="img1" />
                </td>
            </tr>
             
         <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('information'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg" /> <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'info'
                 ?>
                 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'></textarea>
                 <script type="text/javascript"> 
                 CKEDITOR.replace( '<?php echo $this_name ?>' , 
                 { 
                    enterMode : CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_BR 
                 }); 
                 </script>
                 
                </td>
            </tr>
            
            
             <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('information'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg" /> <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'en_info'
                 ?>
                 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'></textarea>
                 <script type="text/javascript"> 
                 CKEDITOR.replace( '<?php echo $this_name ?>' , 
                 { 
                    enterMode : CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_BR 
                 }); 
                 </script>
                 
                </td>
            </tr>
            
            
            
            
            
			@include('manage.include.date_start_end_add')
            
            
            
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('comment_and_rating'); ?></th>
                <td>
                 <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio11" value="1" > 
                <label class="input-label" for="test-radio11"><?php echo $TextLanguage->lang('yes'); ?></label></div>&nbsp;&nbsp;
                <div class="align-box" style="width:110px;">
                <input name="can_review" type="radio" id="test-radio12" value="0" checked="checked"> 
                <label class="input-label" for="test-radio12"><?php echo $TextLanguage->lang('no'); ?></label></div>&nbsp;&nbsp; 
                </td>
            </tr> 
            
            
            
            
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/' . $config_mod . '' ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    </form>
    
<?php /*    
<div id='floater' style="width:280px; z-index:10; visibility: visible; position: absolute; right: -180px; top: -220px; border:1px solid black; background-color:#FFFFFF;">
<div align="right"><a href="javascript:;" onClick="float_ads_close();" style="color:#666666;background-color:#FFFFFF; font-size:16px; text-decoration:none; font-weight:bold">[ - ]</a></div>
<table id='floater_sub' align="center" border="0" cellspacing="0" cellpadding="5">
    <tr align="center">
        <td width="60">
        	<img src="<?php echo base_url().'assets/panel/' ?>mobile_icon.jpg" style="cursor:pointer" onclick="preview_submit('th','320','95%');" />
        </td>
        <td>
        	<img src="<?php echo base_url().'assets/panel/' ?>tablet_icon.jpg" style="cursor:pointer" onclick="preview_submit('th','768','95%');" />
        </td>
        <td>
        	<img src="<?php echo base_url().'assets/panel/' ?>desktop_icon.jpg" style="cursor:pointer" onclick="preview_submit('th','1010','95%');" />
        </td>
    </tr>
    <tr align="center">
    <td><b>Mobile</b></td><td><b>Tablet</b></td><td><b>Desktop</b></td>
    </tr>
     
</table>
</div>
     
<script type="text/javascript"> 
lastScrollX = 0; 
lastScrollY = 0;
f1 = document.getElementById('floater');
function float_ads() 
{
	if(document.documentElement.scrollTop)
	{
		diffY = document.documentElement.scrollTop; 
	}
	else if(diffY = window.pageYOffset)
	{
		diffY = window.pageYOffset; 
	}
	else
	{
		diffY = document.body.scrollTop; 
	}
	if(diffY != lastScrollY) 
	{
		percent = .1 * (diffY - lastScrollY);
		if(percent > 0) 
		{
			percent = Math.ceil(percent)
		}
		else 
		{
			percent = Math.floor(percent)
		}
		oldtop = f1.style.top.split("px");
		newtop = parseInt(oldtop[0])+percent;
		f1.style.top = newtop+"px";
		lastScrollY = lastScrollY + percent;
	}
} 
function float_ads_close()
{
	//window.clearInterval(id_interval);
	var a = document.getElementById('floater_sub');
	var b = document.getElementById('floater');
	
	if(a.style.display == "none")
	{
		a.style.display = "";
		b.style.width = "280px";
	}
	else
	{
		a.style.display = "none";
		b.style.width = "40px";
	}
}
id_interval = window.setInterval("float_ads()",20);
</script> 
*/ ?>
    
@include('manage.include.main_form_footer') 