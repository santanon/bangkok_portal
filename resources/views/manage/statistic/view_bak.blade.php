<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
    function check_form()
    {  
        if(document.getElementById('test-radio1').checked == true)
        {
             if(document.getElementById('search_id').value == '')
			{
				document.getElementById('search_id').focus();
				return false;
			} 
        }
                                                                                    
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
	
	if(v1 == '1')
	{
		a1.style.display = '';
		a2.style.display = ''; 
	}
	else
	{
		a1.style.display = 'none';
		a2.style.display = 'none'; 
	} 
}
</script>
    
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('enable'); ?></th>
                <td>
            <div class="align-box" style="width:110px;"> 
                <input name="search_option" type="radio" id="test-radio1" value="1" <?php if($edit_search_option == '1'){ ?> checked="checked" <?php } ?>  onclick="show_link('1');"> 
                <label class="input-label" for="test-radio1"><?php echo $TextLanguage->lang('on'); ?></label>
            </div>&nbsp;&nbsp;
            <div class="align-box" style="width:110px;"> 
                    <input name="search_option" type="radio" id="test-radio2" value="2" <?php if($edit_search_option == '2'){ ?> checked="checked" <?php } ?> onclick="show_link('2');"  />
                    <label class="input-label" for="test-radio2"><?php echo $TextLanguage->lang('off'); ?></label>
            </div>
                    
                </td>
            </tr> 
            
 
            <tr id="link_hide_1">
                <th width="120"><?php echo $TextLanguage->lang('position'); ?></th>
                <td>
            <div class="align-box" style="width:110px;"> 
                <input name="search_layout" type="radio" id="test-radio3" value="1" <?php if($edit_search_layout == '1'){ ?> checked="checked" <?php } ?> /> 
                <label class="input-label" for="test-radio3"><?php echo $TextLanguage->lang('top'); ?></label>
            </div>&nbsp;&nbsp;
            <div class="align-box" style="width:110px;"> 
                    <input name="search_layout" type="radio" id="test-radio4" value="2" <?php if($edit_search_layout == '2'){ ?> checked="checked" <?php } ?>  />
                    <label class="input-label" for="test-radio4"><?php echo $TextLanguage->lang('bottom'); ?></label>
            </div> 
                    
                </td>
            </tr> 
            
            <tr id="link_hide_2">
                <th width="120"><?php echo $TextLanguage->lang('id'); ?></th>
                <td>
            <div class="align-box" style="width:110px;">  
                    <input class="sm-input" name="search_id" type="text" id="search_id" style="width:40%" value="<?php echo $edit_search_id; ?>">
            </div>
                    
                </td>
            </tr> 
            
           
            
             
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panel/' ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
    
<?php
if($edit_search_option == '1')
{
	?>
	<script type="text/javascript">
	show_link('1');
	</script>
	<?php	
}
if($edit_search_option == '2')
{
	?>
	<script type="text/javascript">
	show_link('2');
	</script>
	<?php	
}
?>
    
@include('manage.include.main_form_footer') 