<!DOCTYPE html>
<html lang="en" <?php body_class(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.87, maximum-scale=1.44, user-scalable=yes">
		<meta http-equiv="X-UA-Compatible" content="IE=EDGE" />

		<meta property="og:title" content="Natapoc Lodge"/>
	  <meta property="og:type" content="article"/>
	  <meta property="og:url" content="http://www.natapoclodge.com/"/>
	  <meta property="og:image" content="http://www.natapoclodge.com/i/photos/profile.jpg"/>
		<meta property="og:description"
	         content="The luxurious rustic vacation destination near Lake Wenatchee and Leavenworth, WA."/>

		<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

		<link rel="author" href="http://www.joshreeves.com/" />
		<link rel="shortcut icon" href="/favicon.png" />

    <?php wp_head(); ?>

		<style>
		@page
		{
		    size: auto;   /* auto is the initial value */

		    /* this affects the margin in the printer settings */
		    margin: 8mm 3mm 0mm;  
		}

		</style>

	</head>
	<body>

		<div class="document">
