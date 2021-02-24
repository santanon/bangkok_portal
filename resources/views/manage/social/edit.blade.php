<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1; 
?>   
@include('manage.include.main_form_header') 

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'สังคมออนไลน์';
	</script>


<script type="text/javascript">
function check_form()
{                                                                            
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
    
            
<script>
function show_link(v1)
{
	var a1 = document.getElementById('link_hide_1');
	var a2 = document.getElementById('link_hide_2');  
	var a3 = document.getElementById('link_hide_3'); 
	var a4 = document.getElementById('link_hide_4'); 
	var a5 = document.getElementById('link_hide_5'); 
	var a6 = document.getElementById('link_hide_6');  
	
	if(v1 == '1')
	{
		a1.style.display = '';
		a2.style.display = ''; 
		a3.style.display = '';
		a4.style.display = ''; 
		a5.style.display = '';
		a6.style.display = ''; 
	}
	else
	{
		a1.style.display = 'none';
		a2.style.display = 'none'; 
		a3.style.display = 'none';
		a4.style.display = 'none'; 
		a5.style.display = 'none';
		a6.style.display = 'none'; 
	} 
}
</script>
    
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_social_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('enable'); ?></th>
                <td>
            <div class="align-box" style="width:110px;"> 
                <input name="social_option" type="radio" id="test-radio1" value="1" <?php if($edit_social_option == '1'){ ?> checked="checked" <?php } ?>  onclick="show_link('1');"> 
                <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('on'); ?></label>
            </div>&nbsp;&nbsp;
            <div class="align-box" style="width:110px;"> 
                    <input name="social_option" type="radio" id="test-radio2" value="2" <?php if($edit_social_option == '2'){ ?> checked="checked" <?php } ?> onclick="show_link('2');"  />
                    <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('off'); ?></label>
            </div>
                    
                </td>
            </tr> 
            
 
            <tr id="link_hide_1">
                <th width="120"><?php echo $TextLanguage->lang('position'); ?></th>
                <td>
            <div class="align-box" style="width:110px;"> 
                <input name="social_layout" type="radio" id="test-radio3" value="1" <?php if($edit_social_layout == '1'){ ?> checked="checked" <?php } ?> /> 
                <label class="input-label" for="test-radio3"><?php echo $TextLanguage->lang('top'); ?></label>
            </div>&nbsp;&nbsp;
            <div class="align-box" style="width:110px;"> 
                    <input name="social_layout" type="radio" id="test-radio4" value="2" <?php if($edit_social_layout == '2'){ ?> checked="checked" <?php } ?>  />
                    <label class="input-label" for="test-radio4"><?php echo $TextLanguage->lang('bottom'); ?></label>
            </div> 
                    
                </td>
            </tr> 
            
            <tr id="link_hide_2" style="visibility:hidden">
                <th width="120"><?php echo $TextLanguage->lang('style'); ?></th>
                <td>
           <div class="align-box" style="width:110px;"> 
                <input name="social_id" type="radio" id="test-radio5" value="1" <?php if($edit_social_id == '1'){ ?> checked="checked" <?php } ?> /> 
                <label class="input-label" for="test-radio5"><?php echo $TextLanguage->lang('icon'); ?></label>
            </div>&nbsp;&nbsp;
            <div class="align-box" style="width:110px;"> 
                    <input name="social_id" type="radio" id="test-radio6" value="2" <?php if($edit_social_id == '2'){ ?> checked="checked" <?php } ?>  />
                    <label class="input-label" for="test-radio6"><?php echo $TextLanguage->lang('text'); ?></label>
            </div> 
                    
                </td>
            </tr> 
            
            <tr id="link_hide_3">
                <th width="120"><?php echo $TextLanguage->lang('facebook_url'); ?></th>
                <td>
            <div class="align-box" style="width:110px;">  
                    <input class="sm-input" name="social_fb" type="text" id="social_fb" style="width:40%" value="<?php echo $edit_social_fb; ?>" placeholder="http://www.facebook.com/xxx">
            </div>
                    
                </td>
            </tr> 
            <tr id="link_hide_4">
                <th width="120"><?php echo $TextLanguage->lang('twitter_url'); ?></th>
                <td>
            <div class="align-box" style="width:110px;">  
                    <input class="sm-input" name="social_tw" type="text" id="social_tw" style="width:40%" value="<?php echo $edit_social_tw; ?>" placeholder="http://www.twitter.com/xxx">
            </div>
                    
                </td>
            </tr> 
            <tr id="link_hide_5">
                <th width="120"><?php echo $TextLanguage->lang('instagram_url'); ?></th>
                <td>
            <div class="align-box" style="width:110px;">  
                    <input class="sm-input" name="social_ins" type="text" id="social_ins" style="width:40%" value="<?php echo $edit_social_ins; ?>" placeholder="http://www.instagram.com/xxx">
            </div>
                    
                </td>
            </tr> 
              <tr id="link_hide_6">
                <th width="120"><?php echo $TextLanguage->lang('youtube_url'); ?></th>
                <td>
            <div class="align-box" style="width:110px;">  
                    <input class="sm-input" name="social_yt" type="text" id="social_yt" style="width:40%" value="<?php echo $edit_social_yt; ?>" placeholder="http://www.youtube.com/xxx">
            </div>
                    
                </td>
            </tr> 
            
             
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
               
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
    
<?php
if($edit_social_option == '1')
{
	?>
	<script type="text/javascript">
	show_link('1');
	</script>
	<?php	
}
if($edit_social_option == '2')
{
	?>
	<script type="text/javascript">
	show_link('2');
	</script>
	<?php	
}
?>
    
@include('manage.include.main_form_footer') 