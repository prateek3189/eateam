<?php
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");

	unset($_SESSION['login']);
	unset($_SESSION['message']);
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	unset($_SESSION['messages_failure']);
	unset($_SESSION['messages_success']);

	@session_destroy();

	header("Location: index.php");
	die;
?>
