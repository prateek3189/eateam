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
			<li><a href="#"><i class="icon-facebook"></i></a></li>
			<li><a href="#"><i class="icon-tweeter"></i></a></li>
			<li><a href="#"><i class="icon-in"></i></a></li>
			<li><a href="#">LOGIN</a></li>
		</ul>
	</div>

	<!-- Logo and Nav Menu -->
	<div class="nav-menu">
		<img src="<?php echo IMAGE_PATH_HTTP;?>/logo.jpg" alt="Logo" class="logo-image" />
		<img src="<?php echo IMAGE_PATH_HTTP;?>/mobile-nav-icon.png" alt="Logo" class="mobile-nav-image" />
		<ul class="nav-menu-list">
			<li><a href="#">ABOUT</i></a></li>
			<li><a href="#">SERVICES</a></li>
			<li><a href="#">TALENT</a></li>
			<li><a href="#">CONTACT</a></li>
		</ul>
	</div>
</div>
