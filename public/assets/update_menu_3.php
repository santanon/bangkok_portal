<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><?php 
if(file_exists ('../menu_cache/'.$_GET['a'].'_'.$_GET['b'].'_'.$_GET['c'].'.php'))
{
	if(filesize('../menu_cache/'.$_GET['a'].'_'.$_GET['b'].'_'.$_GET['c'].'.php') > 0) 
	{
		?><meta http-equiv="refresh" content="1;URL=http://localhost/bangkok.go.th.portal/<?php echo $_GET['c'] ?>" /><?php
}
	else
	{
		?>กรุณารอสักครู่...<meta http-equiv="refresh" content="1;URL=update_menu_1.php?a=<?php echo $_GET['a'] ?>&b=<?php echo $_GET['b'] ?>&c=<?php echo $_GET['c'] ?>" /><?php
}
}
else
{
	?>กรุณารอสักครู่...<meta http-equiv="refresh" content="1;URL=update_menu_2.php?a=<?php echo $_GET['a'] ?>&b=<?php echo $_GET['b'] ?>&c=<?php echo $_GET['c'] ?>" /><?php
}
?>-->