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
	if(CKEDITOR.instances.info.getData() == '')
	{
		CKEDITOR.instances.info.focus();
		return false;
	}																					
	if(!confirm('<?php echo $TextLanguage->lang('confirm'); ?>?'))
	{
		return false;
	}
}
</script>
<form method="post" enctype="multipart/form-data" onsubmit="return check_form();" action="http://127.0.0.1:8000/manage-admin/send_submit?m=<?php echo $config_mod ?>">
@csrf <!-- {{ csrf_field() }} -->
<table>
	<tbody>
        <tr>
            <th width="120"><?php echo $config_dropdown_title; ?></th>
            <td> 
            
                <select class="selectric" name="cat_id" id="cat_id"> 
                <option value="all">- <?php echo $TextLanguage->lang('all'); ?> -</option> 
                <?php 
				$run = 0;
                foreach ($list_cat as $row_cat)
                {   
                    ?>
                    <option value="<?php echo $row_cat->id; ?>"><?php echo $row_cat->title; ?> (<?php echo $list_cat_count[$run] ?>)</option> 
                    <?php
					$run++;
                } 
                ?> 
                </select>
            
            </td>
        </tr>
		
		<tr>
			<th width="120"><?php echo $TextLanguage->lang('subject'); ?> <span style="color:red">*</span></th>
			<td>
			<input id="title" name="title" type="text" class="sm-input" style="width:99%" value="<?php echo @$read_title ?>"> 
			</td>
		</tr>
		 
		
		<tr>
			<th width="120" valign="top" style="padding-top:10px;"><?php echo $TextLanguage->lang('message'); ?> <span style="color:red">*</span></th>
			<td> 


				<?php
				$this_name = 'info';
				$this_value = @$read_info;
				?>
				@include('manage.include.input_texteditor')

 
			</td>
		</tr>
		
	 
		<tr>
			<th valign="top">&nbsp;</th>
			<td>
			
			<span class="btn round big blue"><input type="submit" class="fontfacetext" value="<?php echo $TextLanguage->lang('send'); ?>"></span>&nbsp;
			<span class="btn round big gray"><input type="button" class="fontfacetext" value="<?php echo $TextLanguage->lang('cancel'); ?>" onclick="window.location = 'http://127.0.0.1:8000/manage-admin/list?m=<?php echo $config_mod;  ?>';"></span>

			</td>
		</tr>
		
		
	</tbody>
</table>
</form>
                                                
@include('manage.include.main_form_footer') 