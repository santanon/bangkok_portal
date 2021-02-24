<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
$no_back = 1;
?>   
@include('manage.include.main_form_header') 

<script>
	parent.document.getElementById('modal_full_span').innerHTML = 'ข้อความด่านล่าง';
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
    
            
 
    
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_copyright_submit?m=<?php echo $config_mod;  ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg"> <span style="color:red">*</span></th>
			<td> 

				<?php
				$this_name = 'copyright_info';
				$this_value = @$edit_copyright_info;
				?>
				@include('manage.include.input_texteditor')
 
			 
			</td>
		</tr>
        
         <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg"> <span style="color:red">*</span></th>
			<td>
				
				<?php
				$this_name = 'copyright_info_en';
				$this_value = @$edit_copyright_info_en;
				?>
				@include('manage.include.input_texteditor')


			</td>
		</tr>
        
            <tr>
                <th valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('call_center'); ?>&nbsp;</th>
                <td><input value="<?php echo @$edit_call_center_info ?>" name="call_center_info" type="call_center_info" class="sm-input" id="call_center_info" style="width:40%"> </td>
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
    
 
    
@include('manage.include.main_form_footer') 