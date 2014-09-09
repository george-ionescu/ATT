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