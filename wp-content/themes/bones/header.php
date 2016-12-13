<!doctype html>
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> >
		<div id="container">
			<header class="header" role="banner">
				<div class="menu main-header">
					<div class="menu-wrapper">
						<h1 class="title"><a href="/">Alison McKay</a></h1>
						<nav role="navigation" class="main-nav">
							<ul>
								<li><a href="/" title="See my work">work</a></li>
								<li><a href="/about" title="About me">about</a></li>
								<li><a href="mailto:mckay.ali@gmail.com" target="_blank" title="Email me">contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="menu baby-header">
					<div class="menu-wrapper">
						<h1 class="title"><a href="/">Alison McKay</a></h1>
						<nav role="navigation" class="main-nav">
							<ul>
								<li><a href="/" title="See my work">work</a></li>
								<li><a href="/about" title="About me">about</a></li>
								<li><a href="mailto:mckay.ali@gmail.com" target="_blank" title="Email me">contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
