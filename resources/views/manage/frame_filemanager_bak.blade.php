<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   

@include('manage.include.header')  

<div id="full_screen" style="background-color:#666666;width:100%;height:100%;position: absolute;top:0;left:0;z-index:99999;display:none;opacity:0.9;filter:alpha(opacity=90);">
<table align="center"border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><b style="color:#FFF"><?php echo $TextLanguage->lang('saving') ?>...</b></td>
    </tr>
</table>
</div>

<?php
$this_CKEditorFuncNum = $_GET['CKEditorFuncNum'];
?>


<div align="center" style="padding-top:10px"> 
<span data-btn-group-id="98" data-btn-id="1" class="btn-2stage big blue active"><a class="fontfacetext" href="#" onclick="document.getElementById('myiframe').src = '<?php echo base_url() ?>assets/file_manager/<?php echo $type ?>.php?CKEditor=<?php echo $field ?>&CKEditorFuncNum=<?php echo $this_CKEditorFuncNum ?>&langCode=en';"><?php echo $TextLanguage->lang('my_files') ?></a></span>
<span data-btn-group-id="98" data-btn-id="2" class="btn-2stage big blue"><a class="fontfacetext" href="#" onclick="document.getElementById('myiframe').src = '<?php echo base_url() ?>assets/file_manager_public/<?php echo $type ?>.php?CKEditor=<?php echo $field ?>&CKEditorFuncNum=<?php echo $this_CKEditorFuncNum ?>&langCode=en';"><?php echo $TextLanguage->lang('share_center') ?></a></span> <div align="center"><br /><input type="button" value="<?php echo $TextLanguage->lang('save_n_close') ?>" onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ document.getElementById('full_screen').style.display = '';window.location = '<?php echo base_url() ?>panel/sync_fm';}" /></div>
</div> 

<iframe id="myiframe" frameborder="0" scrolling="no" height="550" width="100%" src="<?php echo base_url() ?>assets/file_manager/<?php echo $type ?>.php?CKEditor=<?php echo $field ?>&CKEditorFuncNum=<?php echo $this_CKEditorFuncNum ?>&langCode=en"></iframe>

<!--<div align="center"><input type="button" value="<?php echo $TextLanguage->lang('save_n_close') ?>" onclick="if(confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){ document.getElementById('full_screen').style.display = '';window.location = '<?php echo base_url() ?>panel/sync_fm';}" /></div>-->
   	 
@include('manage.include.scripts') 

<script>
btn2stageFocus(98,1);
</script>