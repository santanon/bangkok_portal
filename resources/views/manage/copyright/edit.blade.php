<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
@include('manage.include.main_form_header') 


<script type="text/javascript">
    function check_form()
    {   	                                                                           
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
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg"> <span style="color:red">*</span></th>
			<td> 
			 <?php
			 $this_name = 'copyright_info'
			 ?>
			 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'><?php echo @$edit_copyright_info ?></textarea>
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
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg"> <span style="color:red">*</span></th>
			<td> 
			 <?php
			 $this_name = 'copyright_info_en'
			 ?>
			 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'><?php echo @$edit_copyright_info_en ?></textarea>
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
                <th valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('call_center'); ?>&nbsp;</th>
                <td><input value="<?php echo @$edit_call_center_info ?>" name="call_center_info" type="call_center_info" class="sm-input" id="call_center_info" style="width:210px"> </td>
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
    
 
    
@include('manage.include.main_form_footer') 