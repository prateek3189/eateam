<?php
    //Index.php will be the first landing page to show login box for Lead and HR
    include("config/config.php");

    //Add JS
	$AddJS	=	array("jquery", "common", "form");

    //Add CSS
	$AddCSS	=	array("style");

    // Form
    $page   =   "TALENT";

    //View HTML
	include(VIEW_PATH."/contact.html");

?>
