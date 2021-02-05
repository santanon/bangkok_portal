<?php
function base_url()
{
	return 'http://127.0.0.1:8000/';	
}
?>
<!doctype html>
<!--[if lt IE 8]>      <html class="lt-ie11 lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie11 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="lt-ie11 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>        <html class="lt-ie11" lang="en"> <![endif]-->
<!--[if gt IE 10]><!--><html lang="en"> <!--<![endif]-->
<head>
	<!-- add extra meta tag here -->
	<!--                         --> 
    @include('manage.include.core')
    
	<title><?php echo $title; ?></title>

</head>
<body style="background-color:#f5f5f5;">