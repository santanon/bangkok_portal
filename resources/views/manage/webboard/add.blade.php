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
		/* 
        if(CKEDITOR.instances.info.getData() == '')
		{
			CKEDITOR.instances.info.focus();
			return false;
		} 
		*/                                                                           
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script>
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="<?php echo base_url(); ?>panels/<?php echo $config_mod; ?>/add_submit">
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
                <th width="120"><?php echo $TextLanguage->lang('title'); ?> <span style="color:red">*</span></th>
                <td><input name="title" type="text" class="sm-input" id="title" style="width:510px" placeholder="<?php echo $TextLanguage->lang('title'); ?>"> 
                </td>
            </tr> 
            
  
            <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('information'); ?>   <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'info'
                 ?>
                 <textarea id='<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='10'></textarea>
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
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
			<td>
			<input id="file1" name="file1" type="file"> 
			<br /> <?php echo $TextLanguage->lang('system_file_webboard'); ?>
			</td>
		</tr>
            
            
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = '<?php echo base_url() . 'panels/' . $config_mod . '' ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    </form>
    
@include('manage.include.main_form_footer') 