<!DOCTYPE html>
<html lang="en">
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

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
		<![endif]-->

	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=238120272948973";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<header>
			<nav>
				<h1 id="logo"><span><?php bloginfo('name'); ?></span></h1>
        <?php

          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu'
          );

          wp_nav_menu( $defaults );

        ?>
			</nav>
		</header>
		<div id="container">
			<div id="containerI">
				<div id="containerII">
