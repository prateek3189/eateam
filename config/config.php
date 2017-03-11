<?php
	//config.php for all configurations

  //Print function_exists
  function pr($arr){
    echo "<pre>";
    print_r($arr);
    die;
  }

	//session start
	session_start();

	// DEV_MODE
    define("DEV_MODE", false);

	if(DEV_MODE) {
        //ERROR Reporting
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
    }

	//Default Paths
	$protocol	=	explode('/',$_SERVER['SERVER_PROTOCOL']);
	$protocol	=	strtolower($protocol[0]);
	define('HTTP_HOST', $_SERVER['HTTP_HOST']);
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

	if(DEV_MODE) {
	    $req_uri	=	"/invinciblezone/";
        //DATABASE DETAILS
    	define("DB_HOST",'localhost');
    	define("DB_USERNAME",'root');
    	define("DB_PASSWORD",'');
    	define("DATABASE",'invincible');
	} else {
	    $req_uri	=	"/";
        //DATABASE DETAILS
    	define("DB_HOST",'148.72.232.172:3306');
    	define("DB_USERNAME",'Invincible3189');
    	define("DB_PASSWORD",'iNvincible3189$$');
    	define("DATABASE",'invincible');
	}

  //Title
	define("TITLE",'Invincible');

	//FOLDER PATH
	define('FOLDER_PATH_HTTP', $protocol.'://'.HTTP_HOST.$req_uri);
    $folder_path = rtrim(DOCUMENT_ROOT,'/').$req_uri;
	define('FOLDER_PATH', str_replace("/", "\\", $folder_path));

	//View Path
	define('VIEW_PATH', FOLDER_PATH.'view');

	//Upload Path
	define('UPLOAD_PATH', FOLDER_PATH.'upload/');

	//Drive Path
	define('DRIVE_PATH', FOLDER_PATH.'Drive/');

	//Note Path
	define('NOTE_PATH', FOLDER_PATH.'note/');

	//Image Path
	define('IMAGE_PATH_HTTP', FOLDER_PATH_HTTP.'images');

    //Post Path
	define('POST_IMAGE_HTTP', FOLDER_PATH_HTTP.'post/');
    define('POST_IMAGE', FOLDER_PATH.'post');

	//CSS Path
	define('CSS_PATH_HTTP', FOLDER_PATH_HTTP.'css');

	//JS Path
	define('JS_PATH_HTTP', FOLDER_PATH_HTTP.'js');

	//Navigation Path
	define('NAVIGATION_PATH', FOLDER_PATH.'navigation');

	//Developer's Path
	define('DEVELOPER_PATH_HTTP', FOLDER_PATH_HTTP.'developer/');

	//Dumb Path
	define('DUMB_PATH', FOLDER_PATH.'dump');

	//Upload Path
	define('UPLOAD_PATH_HTTP', FOLDER_PATH_HTTP.'upload');

	//CONTROLLER PATH
	define('CONTROLLER_PATH', FOLDER_PATH.'controller\\');

  //CONTROLLER PATH HTTP
	define('CONTROLLER_PATH_HTTP', FOLDER_PATH_HTTP.'controller/');

	//SET INI VALUES
	define('TIMELIMIT',120);
	ini_set('max_execution_time', TIMELIMIT);

?>
