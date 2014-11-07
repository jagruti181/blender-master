<?php
if(!defined('LOCAL_MODE')) {
	die('<span style="font-family: tahoma, arial; font-size: 11px">config file cannot be included directly');
}

if (LOCAL_MODE) {
	// Settings for local midas server do not edit here
	
	// database settings
	$ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'mafiawar_blenders';
	$ARR_CFGS["db_user"] = 'root';
	$ARR_CFGS["db_pass"] = '';
	define('SITE_SUB_PATH', '/blender-master');
}
else {
	// Settings for Projects server edit whenever shifting site to different server
	$ARR_CFGS["db_host"] = 'localhost';
	$ARR_CFGS["db_name"] = 'itvedant_diw';
	$ARR_CFGS["db_user"] = 'itvedant_diw';
	$ARR_CFGS["db_pass"] = 'dishiswish';
	define('SITE_SUB_PATH', '');
}

define('SITE_URL_PATH', 'http://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('SITE_WS_PATH', 'http://'.$_SERVER['HTTP_HOST'].SITE_SUB_PATH);
define('SITE_ADMIN_URL',SITE_WS_PATH."/sitepanel");
define('ELEMENTS_DIR', SITE_DIR_PATH."/include/elements");
define('PLUGINS_DIR', 'include/plugins');

define('ADMIN_DIR', 'sitepanel');


$baseurl=SITE_URL_PATH;

$_GLOBALS['pg_size_arr'] = array("1","5","10","20","25","50","100");

$_GLOBALS['pgsize_arr'] = array("1","5","10","20","25","50","100");


	
		
?>
