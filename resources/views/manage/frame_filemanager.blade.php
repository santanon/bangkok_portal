<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
?>
@include('manage.include.header')
<?php 
$this_CKEditorFuncNum = $_GET['CKEditorFuncNum'];
?>
<iframe id="myiframe" frameborder="0" scrolling="no" height="550" width="100%" src="<?php echo base_url() ?>assets/elFinder/elfinder.php?CKEditor=<?php echo $field ?>&CKEditorFuncNum=<?php echo $this_CKEditorFuncNum ?>"></iframe>
@include('manage.include.scripts')