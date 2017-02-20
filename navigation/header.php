<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo TITLE;?></title>
  <?php
		if(count($AddCSS)){
			foreach($AddCSS as $css){
	?>
		<link rel="stylesheet" href="<?php echo CSS_PATH_HTTP."/".$css.".css";?>" media="screen" type="text/css" />
	<?php
			}
		}
	?>

	<link href="<?php echo IMAGE_PATH_HTTP."/fevicon.png";?>" type="image/x-icon" rel="icon">

	<?php
		if(count($AddJS)){
			foreach($AddJS as $js){
	?>
		<script type="text/javascript" src="<?php echo JS_PATH_HTTP."/".$js.".js";?>"></script>
	<?php
			}
		}
	?>
</head>
<body>
<!-- Success or Error Messages-->
<div class="action_messages success">Bruce Wayn added as your friend successfully.</div>
<div class="action_messages failure">Bruce Wayn added as your friend successfully.</div>
<div class="main">
  <header>
    <a href="dashboard.php"><img src="<?php echo IMAGE_PATH_HTTP."/logo.png";?>"/></a>
		<?php
      if($_SESSION['login'] == '1'){
    ?>
          <div class="welcome_heading">Welcome <a href="<?php echo FOLDER_PATH_HTTP.'profile.php';?>" class="username_text">Prateek Magarde</span> | <a href="<?php echo FOLDER_PATH_HTTP;?>logout.php" class="header_logout_link">Logout</a> </div>
          <?php
      }
    ?>
	</header>
