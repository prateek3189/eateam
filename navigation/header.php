<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo TITLE;?></title>
	<link href="<?php echo IMAGE_PATH_HTTP."/fev-logo.jpg";?>" type="image/x-icon" rel="icon">
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
</head>
<body <?php if(!DEV_MODE) {echo 'oncontextmenu="return false"';}?>>
<header>
	<div class="logo">
		<img src="<?php echo IMAGE_PATH_HTTP."/logo.png"?>" alt="Logo">
	</div>
</header>
<?php
	include_once(NAVIGATION_PATH."/nav.php");
?>
