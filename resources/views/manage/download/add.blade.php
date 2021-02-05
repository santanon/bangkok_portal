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
		 if(document.getElementById('file1_preview').value == '')
        {
            document.getElementById('file1_preview').focus();
            return false;
        } 
		if(document.getElementById('en_file1_preview').value == '')
        {
            document.getElementById('en_file1_preview').focus();
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
                <th width="120"><?php echo $TextLanguage->lang('name'); ?></th>
                <td>
                <input name="title" type="text" class="sm-input--flag-th" id="title" style="width:235px" placeholder="<?php echo $TextLanguage->lang('name'); ?>"> 
                <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:235px" placeholder="<?php echo $TextLanguage->lang('name'); ?>"> 
                </td>
            </tr> 
 
           
            
            <tr>
                <th width="120" valign="top" style="padding-top:12px;"><?php echo $TextLanguage->lang('url'); ?></th>
                <td>
                    <input name="file1" type="text" class="sm-input--flag-th" id="file1_preview" style="width:510px" placeholder="http://"><br />
                    <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/file1',1120,640);return false;" /> 
                    <input type="text" name="file1_hide" id="file1" /> 
                    
                    <br /><br /> 
                     
                    <input name="en_file1" type="text" class="sm-input--flag-en" id="en_file1_preview" style="width:510px" placeholder="http://"><br />
					 <input type="button" name="upload" value="<?php echo $TextLanguage->lang('file_manager'); ?>" onclick="callLightbox('<?php echo base_url(); ?>panel/fm/form/en_file1',1120,640);return false;" />  
                     <input type="text" name="en_file1_hide" id="en_file1" /> 
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