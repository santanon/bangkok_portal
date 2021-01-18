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
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/edit_submit">
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
            
            <tr>
                <th width="120"><?php echo $TextLanguage->lang('question1'); ?></th>
                <td><input value="<?php echo $edit_title ?>" name="title" type="text" class="sm-input--flag-th" id="title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('question1'); ?>">&nbsp;&nbsp;
                    <input value="<?php echo $edit_en_title ?>" name="en_title" type="text" class="sm-input--flag-en" id="en_title" style="width:210px" placeholder="<?php echo $TextLanguage->lang('question1'); ?>">
                </td>
            </tr>  
            
           <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('answer'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg" /> <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'info'
                 ?>
                 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'><?php echo $edit_info ?></textarea>
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
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('answer'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg" /> <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'en_info'
                 ?>
                 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'><?php echo $edit_en_info ?></textarea>
                 <script type="text/javascript"> 
                 CKEDITOR.replace( '<?php echo $this_name ?>' , 
                 { 
                    enterMode : CKEDITOR.ENTER_BR,
                    shiftEnterMode: CKEDITOR.ENTER_BR 
                 }); 
                 </script>
                 
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