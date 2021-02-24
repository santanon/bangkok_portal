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
        if(document.getElementById('en_title').value == '')
        {
            document.getElementById('en_title').focus();
            return false;
        } 
        
        if(document.getElementById('test-radio1').checked == true)
        {
            if(document.getElementById('test-radio3').checked == true)
            {
                if(document.getElementById('link_page').value == '')
                {
                    document.getElementById('link_page').focus();
                    return false;
                } 
            }
            
            if(document.getElementById('test-radio4').checked == true)
            {
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
            }	
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
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('name'); ?>">
                </td>
            </tr> 
            
<script>
function show_link(v1)
{
var a1 = document.getElementById('link_hide_1');
var a2 = document.getElementById('link_hide_2');
var a3 = document.getElementById('link_hide_3');

if(v1 == '1')
{
a1.style.display = '';
a2.style.display = '';
a3.style.display = '';	
}
else
{
a1.style.display = 'none';
a2.style.display = 'none';
a3.style.display = 'none';	
} 
}
</script>
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('type'); ?></th>
                <td><div class="align-box" style="width:110px;">
                <input name="have_submenu" type="radio" id="test-radio1" value="1" checked="checked" onclick="show_link('1');"> 
                <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('link_url'); ?></label></div>&nbsp;&nbsp;
                    <div class="align-box" style="width:210px;"> 
                    <input name="have_submenu" type="radio" id="test-radio2" value="2" onclick="show_link('2');"  />
                    <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('have_sub_menu'); ?></label></div>
                    
                    &nbsp;&nbsp;
                </td>
            </tr>
             
            
            
            <tr id="link_hide_1">
                <th width="120"><?php echo $TextLanguage->lang('link_type'); ?></th>
                <td><div class="align-box" style="width:90px;">
                <input id="test-radio3" name="link_type" value="1" type="radio" checked="checked" > 
                <label class="input-label" for="test-radio3"><?php echo $TextLanguage->lang('internal'); ?></label></div>&nbsp;&nbsp;
                <input name="link_page" id="link_page" type="text" class="sm-input" style="width:40%">    
                <input type="button" name="upload" value="<?php echo $TextLanguage->lang('link_helper'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/lh/form/link_page',500,640);return false;" /> 
                 <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/link_page',1120,640);return false;" />  
                </td>
            </tr>
            <tr id="link_hide_2">
                <th width="120">&nbsp;</th>
                <td><div class="align-box" style="width:90px;"><input id="test-radio4" name="link_type" value="2" type="radio"> 
                <label class="input-label" for="test-radio4"><?php echo $TextLanguage->lang('external'); ?></label></div>&nbsp;&nbsp;
                    <input name="url" type="text" class="sm-input--flag-th" id="url" style="width:40%" placeholder="http://">
                    <input name="en_url" type="text" class="sm-input--flag-en" id="en_url" style="width:40%" placeholder="http://">
                    <br><div class="align-box" style="margin-left:102px;padding-top:2px;width:200px;"><span class="note-text">(e.g. "http://www.yourlink.com")</span></div>&nbsp;&nbsp;
                </td>
            </tr> 
            <tr id="link_hide_3">
                <th width="120"><?php echo $TextLanguage->lang('link_target'); ?></th>
                <td><div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio5" value="_top" checked="checked"> <label class="input-label" for="test-radio5"><?php echo $TextLanguage->lang('redirect'); ?></label></div>&nbsp;&nbsp;
                    <div class="align-box" style="width:110px;"><input name="url_target" type="radio" id="test-radio6" value="_blank"> <label class="input-label" for="test-radio6"><?php echo $TextLanguage->lang('new_window'); ?></label></div>&nbsp;&nbsp;
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