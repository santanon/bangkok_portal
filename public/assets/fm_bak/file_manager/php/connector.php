<?php
error_reporting(0); // Set E_ALL for debuging
session_start();
set_time_limit(5000);
if(empty($_SESSION['panel_id']))
{
	exit;	
}

$filename = '../../../upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'/';

if (file_exists($filename)) 
{
    
} 
else 
{
    exit;
	//mkdir('../../../upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'/');
}  

if(@$_GET['cmd'] == 'mkdir')
{
	if(preg_match('/^[a-zA-Z0-9]{1,}$/', $_GET['name'])) 
	{  
		 
	}
	else
	{
		?>{"added":[{"mime":"directory","ts":1413431586,"read":0,"write":0,"size":0,"hash":"l1_MTExYWFhYWFh","name":"lock","phash":"l1_XA","date":"Today 11:53"}]}<?php
		exit;
	}
} 

include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderConnector.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinder.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeDriver.class.php';
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeLocalFileSystem.class.php';
// Required for MySQL storage connector
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeMySQL.class.php';
// Required for FTP connector support
// include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'elFinderVolumeFTP.class.php';


/**
 * Simple function to demonstrate how to control file access using "accessControl" callback.
 * This method will disable accessing files/folders starting from  '.' (dot)
 *
 * @param  string  $attr  attribute name (read|write|locked|hidden)
 * @param  string  $path  file path relative to volume root directory started with directory separator
 * @return bool|null
 **/
function access($attr, $path, $data, $volume) {
	return strpos(basename($path), '.') === 0       // if file/folder begins with '.' (dot)
		? !($attr == 'read' || $attr == 'write')    // set read+write to false, other (locked+hidden) set to true
		:  null;                                    // else elFinder decide it itself
}

$opts = array(
	// 'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',   // driver for accessing file system (REQUIRED)
			'path'          => '../../../upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'',         // path to files (REQUIRED)
			'URL'           => 'http://127.0.0.1:8000/manage-admin/upload/user/'.sprintf('%08d', $_SESSION['panel_id']).'', // URL to files (REQUIRED)
			'accessControl' => 'access'             // disable and hide dot starting files (OPTIONAL) 
		)
	)
);

// run elFinder
$connector = new elFinderConnector(new elFinder($opts));
$connector->run();

