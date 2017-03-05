<?php
	//Index.php will be the first landing page to show login box for Lead and HR
  include("config/config.php");

	//Add CSS
	$AddCSS	=	array("style");

    //Add JS
	$AddJS	=	array("jquery", "common");

    if(isset($_SESSION['login']) && $_SESSION['login'] === 1) {
        @header('location:'.FOLDER_PATH_HTTP.'index.php');
    }

	//View HTML
	include(VIEW_PATH."/login.html");

?>
