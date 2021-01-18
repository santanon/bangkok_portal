<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><? 
if(file_exists ('../menu_cache/'.$_GET['a'].'_'.$_GET['b'].'_'.$_GET['c'].'.php'))
{
	if(filesize('../menu_cache/'.$_GET['a'].'_'.$_GET['b'].'_'.$_GET['c'].'.php') > 0) 
	{
		?><meta http-equiv="refresh" content="1;URL=http://localhost/bangkok.go.th.portal/<?= $_GET['c'] ?>" /><?	
	}
	else
	{
		?>กรุณารอสักครู่...<meta http-equiv="refresh" content="1;URL=update_menu_1.php?a=<?= $_GET['a'] ?>&b=<?= $_GET['b'] ?>&c=<?= $_GET['c'] ?>" /><?		
	}
}
else
{
	?>กรุณารอสักครู่...<meta http-equiv="refresh" content="1;URL=update_menu_2.php?a=<?= $_GET['a'] ?>&b=<?= $_GET['b'] ?>&c=<?= $_GET['c'] ?>" /><?		
}
?>