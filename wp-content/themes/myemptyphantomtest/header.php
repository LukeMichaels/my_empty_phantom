<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="keywords" content="vegan, animal rights, gala, Mercy For Animals" />
		<meta name="author" content="Mercy For Animals">
		<meta property="og:url"	content="http://www.mfagala.com/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Mercy For Animals' Hidden Heroes Gala" />
		<meta property="og:description"	content="You’re invited to Mercy For Animals' annual Hidden Heroes Gala. Held at the magnificent Vibiana in downtown Los Angeles on September 15, 2018, this black tie event celebrates the work of our undercover investigators, their supporters, and the victories they help MFA bring to farmed animals." />
		<meta property="og:image" content="http://wpit.cachefly.net/gala/2018/05/hidden-heroes-gala-logo.png" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@mercyforanimals" />
		<meta name="twitter:title" content="Mercy For Animals' Hidden Heroes Gala" />
		<meta name="twitter:description" content="Celebrate animals and their heroic advocates at Mercy For Animals' Hidden Heroes Gala. http://mfagala.com/" />
		<meta name="twitter:image" content="http://wpit.cachefly.net/gala/2018/05/hidden-heroes-gala-logo.png" />
		<meta name="twitter:image:alt" content="Hidden Heroes Gala Logo" />

		<!-- :::::::::: Fonts :::::::::: -->

		<!-- :::::::::: Critical Path CSS :::::::::: -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="wrapper" id="wrapper">

			<header class="header" role="banner">

			</header>

			<div id="canvas">

				<nav id="off-canvas-menu" class="off-canvas-menu">
					<?php wp_nav_menu( array('theme_location' => 'mobile_nav', 'container' => '') ); ?>
				</nav>

				<div class="page-wrap">
