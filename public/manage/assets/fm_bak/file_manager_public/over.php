<?php
session_start();

if(empty($_SESSION['panel_id']))
{
	exit;	
} 

?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>File Manager - Bangkok Portal</title>

		<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">

		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="js/elfinder.min.js"></script>

		<!-- elFinder translation (OPTIONAL) -->
		<script type="text/javascript" src="js/i18n/elfinder.ru.js"></script>

		<!-- elFinder initialization (REQUIRED) -->
		<script type="text/javascript" charset="utf-8"> 
		
		function getUrlParam(paramName) {
			var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
			var match = window.location.search.match(reParam) ;
			return (match && match.length > 1) ? match[1] : '' ;
		}
	
		$().ready(function() {
			var funcNum = getUrlParam('CKEditorFuncNum');
			var elf = $('#elfinder').elfinder({
				url : 'php/connector.php',
				height : 400,
				getFileCallback : function(file) 
				{
					window.opener.CKEDITOR.tools.callFunction(funcNum, file);
					window.close();
				},
				commands : [
					'search','view','resize','sort','rm'
				], 	
				defaultView : 'list',
				resizable : false,
				contextmenu : 
				{ 
					navbar : ['|'], 
					cwd    : ['upload'], 
					files  : ['getfile','quicklook','resize','rm']
				},
				uiOptions : {
				// toolbar configuration
				toolbar : [  
					['getfile','quicklook','resize','rm'],['search'],['view']
				],
			
				// directories tree options
				tree : {
					// expand current root on init
					openRootOnLoad : true,
					// auto load current dir parents
					syncTree : true
				},
			
				// navbar options
				navbar : {
					minWidth : 150,
					maxWidth : 500
				},
			
				// current working directory options
				cwd : {
					// display parent directory in listing as ".."
					oldSchool : false
				}
			}
			}).elfinder('instance');
		});
		/*
		contextmenu : 
				{ 
					navbar : ['open', '|', 'copy', 'cut', 'paste', 'duplicate', '|', 'rm', '|', 'info'],
				 
					cwd    : ['back', '|', 'upload', 'mkdir', 'mkfile', 'paste', '|', 'info'],
				 
					files  : [
						'getfile', '|','open', 'quicklook', '|', 'download', '|', 'copy', 'cut', 'paste', 'duplicate', '|',
						'rm', '|', 'edit', 'rename', 'resize', '|', 'info'
					]
				}, 
		*/
		</script> 
        
        <script>
		function windowResize() 
		{
		  	var $body = $(this.ie6 ? document.body : document); 			
			window.resizeTo($body.width(),$body.height());
		}
		</script>
	</head>
	<body>

		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div> 

	</body>
</html>
