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
		/* if(document.getElementById('img1').value == '')
        {
            document.getElementById('img1').focus();
            return false;
        }
		if(CKEDITOR.instances.info.getData() == '')
		{
			CKEDITOR.instances.info.focus();
			return false;
		}	
		 if(CKEDITOR.instances.en_info.getData() == '')
		{
			CKEDITOR.instances.en_info.focus();
			return false;
		}*/	
                                                                                    
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
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('title'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:40%" placeholder="<?php echo $TextLanguage->lang('title'); ?>">
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
            
            
 			<tr>
                <th width="120"><?php echo $config_dropdown_title; ?></th>
                <td> 
                
                    <select class="selectric" name="folder" id="folder">
                    <option value="">--</option>  
                    <?php 
					$dirs = array_filter(glob('upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'/*'), 'is_dir');
					
					while($a = each($dirs))
					{
						?>
                        <option value="<?php echo str_replace('upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'','',$a[1]) ?>"><?php echo str_replace('upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'','',$a[1]) ?></option> 
                        <?php	
					} 
                    ?> 
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