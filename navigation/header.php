<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo TITLE;?></title>
	<link href="<?php echo IMAGE_PATH_HTTP."/fev-logo.jpg";?>" type="image/x-icon" rel="icon">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
<div class="container">
  	<div class="row header">
		<div class="col-sm-4">
			<a href="https://www.facebook.com/eateaminc"><i><?php echo FACEBOOK;?></i></a>
			<a href="http://twitter.com/#!/EateamInc"><i><?php echo TWEETER;?></a>
			<a href="http://www.linkedin.com/company/eateam-inc">Linked In</a>
		</div>
		<div class="col-sm-4">
			Empty
		</div>
		<div class="col-sm-4">
			Call Us
		</div>
  	</div>
