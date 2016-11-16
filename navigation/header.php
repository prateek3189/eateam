<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo TITLE;?></title>
	<link href="<?php echo IMAGE_PATH_HTTP."/fev-logo.jpg";?>" type="image/x-icon" rel="icon">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  	<?php
		// Adding CSS
		if(count($AddCSS)){
			foreach($AddCSS as $css){
	?>
		<link rel="stylesheet" href="<?php echo CSS_PATH_HTTP."/".$css.".css";?>" media="screen" type="text/css" />
	<?php
			}
		}

		// Adding JS
		if(count($AddJS)){
			foreach($AddJS as $js){
	?>
		<script type="text/javascript" src="<?php echo JS_PATH_HTTP."/".$js.".js";?>"></script>
	<?php
			}
		}
	?>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<?php
	include(NAVIGATION_PATH."/svg.php");
?>
<body>
<div class="header container">
	<!-- social icons -->
	<div class="social-icons">
		<ul>
			<li><a href="#"><i><?php echo FACEBOOK; ?></i></a></li>
			<li><a href="#"><i><?php echo TWEETER; ?></i></a></li>
			<li><a href="#"><i class="icon-in"><?php echo LINKEDIN; ?></i></a></li>
			<li><a href="#" class="login">LOGIN</a></li>
		</ul>
	</div>

	<!-- Logo and Nav Menu -->
	<div class="nav-menu">
		<a href="<?php echo FOLDER_PATH_HTTP;?>"><img src="<?php echo IMAGE_PATH_HTTP;?>/logo.png" alt="Logo" class="logo-image" /></a>
		<img src="<?php echo IMAGE_PATH_HTTP;?>/mobile-nav-icon.png" alt="Logo" class="mobile-nav-image" />
		<ul class="nav-menu-list">
			<li class="<?php echo $page === 'ABOUT' ? 'selected': '';?>"><a href="<?php echo FOLDER_PATH_HTTP;?>about.php">ABOUT</i></a></li>
			<li class="<?php echo $page === 'SERVICES' ? 'selected': '';?>"><a href="#">SERVICES</a></li>
			<li class="<?php echo $page === 'TALENT' ? 'selected': '';?>"><a href="<?php echo FOLDER_PATH_HTTP;?>talent.php">TALENT</a></li>
			<li class="<?php echo $page === 'CONTACT' ? 'selected': '';?>"><a href="<?php echo FOLDER_PATH_HTTP;?>contact.php">CONTACT</a></li>
		</ul>
	</div>
</div>
