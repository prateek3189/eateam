<?php
    //Index.php will be the first landing page to show login box for Lead and HR
    include("config/config.php");

    //Add JS
	$AddJS	=	array("jquery", "common");

    //Add CSS
	$AddCSS	=	array("style");

    $page   =   "ABOUT";
    
    //View HTML
	include(VIEW_PATH."/about.html");

?>
