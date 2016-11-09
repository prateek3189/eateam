<?php
    //Index.php will be the first landing page to show login box for Lead and HR
    include("config/config.php");

    //Add JS
	$AddJS	=	array("jquery", "common");

    //Add CSS
	$AddCSS	=	array("style");

    // Dummy text
    $dummy = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.";

    //View HTML
	include(VIEW_PATH."/index.html");

?>
