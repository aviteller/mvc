<?php


session_start();

//constants
define('HASH_GENERAL_KEY', 'aviisok');
//passwords only
define('HASH_PASSWORD_KEY', 'aviisgreat');

//paths
define('URL', 'http://localhost/avi-mvc/');
define('CLASSES', 'classes/');

//database

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'avi_mvc');
define('DB_USER', 'root');
define('DB_PASS', '');


spl_autoload_register(function($class){
	require_once 'CLASSES/' . $class . '.php';
});

require_once	'classes/Form/Val.php';
require_once	'util/Auth.php';

/*spl_autoload_register(function($helper){
	require_once 'config/' . $helper . '.php';
});*/

