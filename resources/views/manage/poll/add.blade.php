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
         if(document.getElementById('c1').value == '')
        {
            document.getElementById('c1').focus();
            return false;
        } 
          if(document.getElementById('en_c1').value == '')
        {
            document.getElementById('en_c1').focus();
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
                <th width="120"><?php echo $TextLanguage->lang('question1'); ?></th>
                <td><input name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('question1'); ?>">&nbsp;&nbsp;
                    <input name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('question1'); ?>">
                </td>
            </tr> 
            
  			<?php
			for($i=1;$i<=10;$i++)
			{
				?>
                <tr>
                    <th width="120"><?php echo $TextLanguage->lang('choice'); ?> <?php echo $i ?></th>
                    <td><input name="c<?php echo $i ?>" type="text" class="sm-input--flag-th" id="c<?php echo $i ?>" style="width:210px" placeholder="<?php echo $TextLanguage->lang('choice'); ?> <?php echo $i ?>">&nbsp;&nbsp;
                        <input name="en_c<?php echo $i ?>" type="text" class="sm-input--flag-en" id="en_c<?php echo $i ?>" style="width:210px" placeholder="<?php echo $TextLanguage->lang('choice'); ?> <?php echo $i ?>">
                        &nbsp; <?php echo $TextLanguage->lang('point'); ?> &nbsp;
                        <input name="p<?php echo $i ?>" type="text" class="sm-input" id="p<?php echo $i ?>" style="width:50px; min-width:50px;" placeholder="<?php echo $TextLanguage->lang('choice'); ?> <?php echo $i ?>" value="0" maxlength="6">
                    </td>
                </tr> 
                <?php
			}
			?>
             
            
            
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