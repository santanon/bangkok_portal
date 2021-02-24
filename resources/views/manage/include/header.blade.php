<?php 
if(!function_exists('base_url')) 
{
    function base_url()
	{
		return 'http://127.0.0.1:8000/';	
	}
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
	<script>
	var main_iframe_cal_height = 20;

	function hide_iframe(var1)
	{
		document.getElementById(var1).style.display = 'none';
	} 
	function show_iframe(var1)
	{
		document.getElementById(var1).style.display = '';
	} 
	function rsif(var1)
	{
		var a = document.getElementById(var1);
		if (a.contentDocument && a.contentDocument.body.offsetHeight) 
		{
			a.height = a.contentDocument.body.offsetHeight+main_iframe_cal_height;
		}
		else if (a.Document && a.Document.body.scrollHeight) 
		{
			a.height = a.Document.body.scrollHeight+main_iframe_cal_height;
		}
	}
	function update_main_iframe_cal_height(var1)
	{
		main_iframe_cal_height = var1;
	}
	function update_file_field(var1,var2)
	{
		document.getElementById(var1).value = var2;
	}
	</script>
	<style>
	.this_iframe {
	border: 1px solid #CCCCCC;
	}	 
	</style>
</head>
<body style="background-color:#f5f5f5;">