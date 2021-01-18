<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage; 
 
?>   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>  
<body><div align="center"><?php echo $TextLanguage->lang('system_file_manager_1'); ?> <span style="color:red;"><b><?php echo (int)$_SESSION['panel_web_disk_use'] ?></b></span> / <?php echo $_SESSION['panel_web_disk'] ?> <?php echo $TextLanguage->lang('system_file_manager_2'); ?></div>
<iframe frameborder="0" scrolling="no" height="420" width="100%" src="<?php echo base_url() ?>assets/file_manager/over.php?CKEditor=info&CKEditorFuncNum=1&langCode=en"></iframe>
<div align="center"><input type="button" value="<?php echo $TextLanguage->lang('finish'); ?>" onclick="if(confirm('<?php echo $TextLanguage->lang('confirm'); ?>?')){ window.top.location = '<?php echo base_url() ?>panel/check_disk'; }" /></div>
</body>
</html>