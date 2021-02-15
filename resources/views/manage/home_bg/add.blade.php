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
		/* if(document.getElementById('img1').value == '')
        {
            document.getElementById('img1').focus();
            return false;
        }
		 */                                                                       
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/add_submit?m=<?php echo $config_mod ?>"> 
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td><input name="title" type="text" class="sm-input" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('name'); ?>"> 
                </td>
            </tr> 
 
            <tr>
                <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
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
             
            
            <!--<tr>
                <th width="120" valign="top" style="padding-top:15px;"><?php echo $TextLanguage->lang('url'); ?></th>
                <td>
                   <input name="url" type="text" class="sm-input--flag-th" id="url" style="width:235px" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=url',500,640);return false;" />
	<br><br>
	<input name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:235px" placeholder="http://"><br />
	<input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('http://127.0.0.1:8000/panel-admin/link_helper?type=form&field=en_url',500,640);return false;" />
                </td>
            </tr>
            
             <tr>
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
             -->
            

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
	document.getElementById(v1+'_preview').src = v2; 
	$.fancybox.close();
} 
</script>
    
@include('manage.include.main_form_footer') 