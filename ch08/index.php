<?php

/**
 * The initialization script for the app
 *
 * The variables below need to be filled out with environment specific data.
 *
 * @author  Jason Lengstorf <jason@lengstorf.com>
 * @author  Phil Leggetter <phil@leggetter.co.uk>
 */

//----------------------------------------------------------
// 初始化环境变量
//----------------------------------------------------------

define('APP_PATH', dirname(__FILE__));

define('APP_FOLDER', dirname($_SERVER['SCRIPT_NAME']));

define('APP_URI', remove_unwanted_slashes('http://'.$_SERVER['SERVER_NAME'].APP_FOLDER.'/'));

define('SYS_PATH', APP_PATH.'/system');

//----------------------------------------------------------
// 初始化应用程序
//----------------------------------------------------------

// 开启 session（会话）
if(!isset($_SESSION)){
	session_start();
}

// 载入配置变量

require_once SYS_PATH.'/config/config.inc.php';

// 判断是否为调试模式并开启错误报告
if(DEBUG ===TRUE){
	ini_set('display_errors', 1);
	error_reporting(E_ALL^E_STRICT);
}else{
	ini_set('display_errors', 0);
	error_reporting(0);
}

// 设置时区
date_default_timezone_set(APP_TIMEZONE);

//----------------------------------------------------------
// 函数声明
//----------------------------------------------------------

/**
 * 根据/将URI转变为数组
 * 
 * @return array
 */

function parse_uri(){
	// 
	$real_uri = preg_replace('~^'.APP_FOLDER.'~', '', $_SERVER['REQUEST_URI'], 1);

	$uri_array = explode('/', $real_uri);
}