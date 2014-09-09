<?php
$isWindows = false;
if (preg_match('/(?i)Windows/', $_SERVER['HTTP_USER_AGENT']) && preg_match('/(?i)Touch/', $_SERVER['HTTP_USER_AGENT'])){
	$isWindows = true;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="no-js">

	<head>
		<title>ALICE - Tips and Trips</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		
		<!-- /// Google Fonts ////////  -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css' />
		
		<!-- /// Cross-browser CSS3 animations ////////  -->
    	<link rel="stylesheet" type="text/css" media="screen" href="css/animate/animate.min.css" />
		
		<!-- /// FontAwesome 4.3 Icons ////////  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/fontawesome/font-awesome.min.css" />
		
		<!-- /// Bootstrap ////////  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.css" />
		
		<!-- /// jQuery UI ////////  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/ui-custom/jquery-ui-1.10.4.css" />
		
		<!-- /// Supersized CSS ////////  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/supersized/supersized.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="css/supersized/supersized.shutter.css" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.mCustomScrollbar.css" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css" />
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.fancybox.css?v=2.1.4" />
		
		<!-- /// Template CSS ////////  -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/preloader.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/elements.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
		
		<!-- /// Supersized ////////  -->
		<script type="text/javascript" src="js/modernizr.custom.js"></script>
	</head>

<body>

	<noscript>
    	<p class="javascriptrequired">You seem to have Javascript disabled. this website needs javascript in order to function properly.</p>
    </noscript>
    
    <div id="main_preloader" class="preloader_container main">
		<div class="windows8">
			<div class="wBall" id="wBall_1">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_2">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_3">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_4">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_5">
				<div class="wInnerBall"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
    
    <div role="navigation" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse"
					class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="/" style="width:68px;display:block;margin:0 auto;margin-top:5px;margin-bottom:5px;"><img src="images/logo_small.png" alt="logo alice" /></a>
			</div>
			<div class="navbar-collapse collapse" style="height: 1px;">
				<ul class="nav navbar-nav">
					<li><a href="book_directly.php">Book Directly</a></li>
					<li><a href="book_assisted.php">Book Assisted</a></li>
					<li><a href="weekend.php">Escape for a Weekend</a></li>
					<li><a href="add_ons.php">Trip add-ons</a></li>
					<li><a href="top_picks.php">Alice's top Picks</a></li>
					<li><a href="#">Trips in Romania</a></li>
					<li><a href="alice-stories.php">Alice's Stories</a></li>
					<li><a href="alice-friends.php">Alice's Friends</a></li>
					<li><a href="who-is-alice.php">Who is Alice</a></li>
				</ul>
			</div>
		</div>
	</div>