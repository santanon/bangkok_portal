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
    
            
 
    
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/info_submit?m=<?php echo $config_mod ?>">
    @csrf <!-- {{ csrf_field() }} -->
    <table>
        <tbody>
            <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('text_header'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_th.jpg">   </th>
			<td>
				
			<?php
			$this_name = 'contact_text_1';
			$this_value = @$edit_contact_text_1;
			?>
			@include('manage.include.input_texteditor')

 
			</td>
		</tr>
        
            <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('text_header'); ?> <img align="absmiddle" src="<?php echo base_url() ?>assets/panel/f_en.jpg">   </th>
			<td> 

				<?php
				$this_name = 'contact_text_2';
				$this_value = @$edit_contact_text_2;
				?>
				@include('manage.include.input_texteditor')
		 
			</td>
		</tr>
            
            
            <tr>
                <th valign="top">Goole Map </th>
                <td>
                <?php
			 $this_name = 'contact_text_3'
			 ?>
                Latitude : <input type="text" name='<?php echo $this_name ?>' style="width:100px;" value="<?php echo @$edit_contact_text_3 ?>" /> &nbsp; 
                <?php
			 $this_name = 'contact_text_4'
			 ?>
                Longitude : <input type="text" name='<?php echo $this_name ?>' style="width:100px;" value="<?php echo @$edit_contact_text_4 ?>" /></td>
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