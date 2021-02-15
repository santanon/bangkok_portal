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
    <form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/edit_submit?m=<?php echo $config_mod;  ?>">
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
                <th width="120"><?php echo $TextLanguage->lang('title'); ?> <span style="color:red">*</span></th>
                <td><input value="<?php echo $edit_title ?>" name="title" type="text" class="sm-input" id="title" style="width:510px" placeholder="<?php echo $TextLanguage->lang('title'); ?>"> 
                </td>
            </tr> 
            
            <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?>   <span style="color:red">*</span></th>
                <td> 


                    <?php
				$this_name = 'info';
				$this_value = $edit_info;
				?>
				@include('manage.include.input_texteditor')

 
                 
                </td>
            </tr>
            
              <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
			<td>
            
            <?php
			if($edit_file1 <> '')
			{
				?>
				<span class="link-text"><a target="_blank" href="<?php echo base_url() . 'upload/webboard/' . $edit_file1; ?>"><?php echo $TextLanguage->lang('download'); ?></a></span><br />
				<?php	
			}
			?> 
            
            
			<input id="file1" name="file1" type="file"> 
			<br /> <?php echo $TextLanguage->lang('system_file_webboard'); ?>
			</td>
		</tr>
            
            <tr>
              <th><?php echo $TextLanguage->lang('post_by'); ?></th>
              <td><?php echo $edit_post_user ?></td>
          </tr>
           <tr>
             <th><?php echo $TextLanguage->lang('ip_address'); ?></th>
                <td><?php echo $edit_ip ?></td>
          </tr>
           <tr>
             <th><?php echo $TextLanguage->lang('no.view'); ?></th>
                <td><?php echo $edit_no_view ?></td>
          </tr>
           <tr>
             <th><?php echo $TextLanguage->lang('last_create'); ?></th>
                <td><?php echo date('d/m/Y H:i:s',$edit_last_create) ?></td>
          </tr>
           <tr>
             <th><?php echo $TextLanguage->lang('last_update'); ?></th>
                <td><?php echo date('d/m/Y H:i:s',$edit_last_update) ?></td>
          </tr>
           
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('save'); ?>"></span>&nbsp;
                <span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $edit_id ?>" />
    </form>
    
    
    
    
     <script type="text/javascript">
    function check_edit_reply()
    { 
           	                                                                            
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script> 
    
    
	<?php 
	$run = 1;
	foreach($list_reply as $ro_reply)
	{   
		?> 
        <br /><br /><a name="edit_<?php echo $ro_reply->id; ?>"></a>
        <form method="post" enctype="multipart/form-data" onsubmit="return check_edit_reply();" action="http://127.0.0.1:8000/manage-admin/reply_edit_submit?m=<?php echo $config_mod ?>">
        @csrf <!-- {{ csrf_field() }} -->
        <table style="border:1px solid #666; padding:10px; border-collapse: separate; width:500px" align="center">
        <tbody> 
         <tr style="background-color:#00719b;">
           <th colspan="2" style="height:30px; color:#FFF"> &nbsp; &nbsp; <?php echo $TextLanguage->lang('edit'); ?> <?php echo $TextLanguage->lang('reply'); ?>#<?php echo $run ?></th>
        </tr> 
        <tr>
           <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?></th>
            <td> 
             <?php
             $this_name = 'info'
             ?>
             <textarea name='<?php echo $this_name ?>' rows='5' style="width:300px;"><?php echo $ro_reply->info; ?></textarea> 
            </td>
        </tr> 
          <tr>
        <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
        <td>
        
        <?php
        if($ro_reply->file1 <> '')
        {
            ?>
            <span class="link-text"><a target="_blank" href="<?php echo base_url() . 'upload/webboard/' . $ro_reply->file1; ?>"><?php echo $TextLanguage->lang('download'); ?></a></span><br />
            <?php	
        }
        ?>  
        <input id="file1" name="file1" type="file"> 
        <br /> <?php echo $TextLanguage->lang('system_image_crop'); ?>
        </td>
        </tr>
        
        <tr>
            <th><?php echo $TextLanguage->lang('post_by'); ?></th>
            <td><?php echo $ro_reply->post_user ?></td>
        </tr>
        <tr>
            <th><?php echo $TextLanguage->lang('ip_address'); ?></th>
            <td><?php echo $ro_reply->ip ?></td>
        </tr> 
        <tr>
            <th><?php echo $TextLanguage->lang('last_create'); ?></th>
            <td><?php echo date('d/m/Y H:i:s',$ro_reply->last_create) ?></td>
        </tr>
        <tr>
            <th><?php echo $TextLanguage->lang('last_update'); ?></th>
            <td><?php echo date('d/m/Y H:i:s',$ro_reply->last_update) ?></td>
        </tr> 
        <tr>
            <th valign="top">&nbsp;</th>
            <td>
            
            <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('edit'); ?>"></span>&nbsp;
             <span class="btn round big red"><input onclick="if(confirm('<?php echo $TextLanguage->lang('confirm'); ?>?')){ window.location = 'http://127.0.0.1:8000/manage-admin/reply_delete?m=<?php echo $config_mod ?>&id=<?php echo $ro_reply->id ?>&id2=<?php echo $edit_id ?>'; }" type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('delete'); ?>"></span>&nbsp;
             
            </td>
        </tr>
        </tbody>
        </table>
        <input type="hidden" name="id" value="<?php echo $ro_reply->id ?>" />
        <input type="hidden" name="topic_id" value="<?php echo $edit_id ?>" />
   		<input type="hidden" name="room_id" value="<?php echo $edit_room_id ?>" />
        </form>
		<?php
		$run++;
	} 
	?> 
    
    
  
    
  
    
    
    
    
     <script type="text/javascript">
   function check_add_reply()
    { 
        if(document.getElementById('add_reply_info').value == '')
        {
            document.getElementById('add_reply_info').focus();
            return false;
        }   	                                                                            
        if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
        {
            return false;
        }
    }
    </script> 
    <br /><br />
    <a name="add_new"></a>
     <form method="post" enctype="multipart/form-data" onsubmit="return check_add_reply();" action="http://127.0.0.1:8000/manage-admin/reply_add_submit?m=<?php echo $config_mod ?>">
     @csrf <!-- {{ csrf_field() }} -->
    <table style="border:1px solid #666; padding:10px; border-collapse: separate; width:500px" align="center">
        <tbody> 
        	 <tr style="background-color:#002837;">
               <th colspan="2" style="height:30px; color:#FFF"> &nbsp; &nbsp; <?php echo $TextLanguage->lang('add_reply'); ?></th>
            </tr> 
            <tr>
               <th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?>   <span style="color:red">*</span></th>
                <td> 
				 <?php
                 $this_name = 'info'
                 ?>
                 <textarea id='add_reply_<?php echo $this_name ?>' name='<?php echo $this_name ?>' rows='5' style="width:300px;"></textarea> 
                </td>
            </tr> 
              <tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('image'); ?></th>
			<td>
            
           
			<input id="file1" name="file1" type="file"> 
			<br /> <?php echo $TextLanguage->lang('system_image_crop'); ?>
			</td>
		</tr> 
            <tr>
                <th valign="top">&nbsp;</th>
                <td>
                
                <span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('add_reply'); ?>"></span>&nbsp;
                

                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="topic_id" value="<?php echo $edit_id ?>" />
    <input type="hidden" name="room_id" value="<?php echo $edit_room_id ?>" />
    </form>
    
    
    
    
    
    
    
    
    
    
 
    
@include('manage.include.main_form_footer') 