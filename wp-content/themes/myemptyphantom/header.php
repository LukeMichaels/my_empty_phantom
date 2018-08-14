<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>assets/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- :::::::::: Fonts :::::::::: -->
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet"> 

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="wrapper" id="wrapper">

			<div id="canvas">

				<nav id="off-canvas-menu" class="off-canvas-menu">
					<?php wp_nav_menu( array('theme_location' => 'mobile_nav', 'container' => '') ); ?>
				</nav>

				<header class="header" role="banner">
					<div class="row">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								my empty phantom
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/logo.png" alt="Logo" class="logo-img"> -->
							</a>
						</div>
						<div class="social-icons">
							<a href="https://www.instagram.com/jessebeamanmusic/" alt="visit My Empty Phantom on Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://www.facebook.com/myemptyphantom/" alt="visit My Empty Phantom on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://open.spotify.com/artist/3WJt2iTLI6VuDQxOc9fWtZ" alt="visit My Empty Phantom on Spotify" target="_blank"><i class="fab fa-spotify"></i></a>
							<a href="https://myemptyphantomaustintx.bandcamp.com/" alt="visit My Empty Phantom on Bandcamp" target="_blank"><i class="fab fa-bandcamp"></i></a>
						</div>
						<div class="site-navigation">
<!--
							<div class="cart-button">
								<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="View your shopping cart">
									<div class="cart-count">
										<?php global $woocommerce;
											$count = $woocommerce->cart->cart_contents_count;
											//if ($count > 0) {
												echo '[' . $count . ']';
											//} 
										?>
									</div>
									<div class="cart-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui/shopping-basket-icon.png" alt="cart-icon">
									</div>
								</a>
							</div>
-->
							<nav class="header-nav">
								<?php wp_nav_menu( array('theme_location' => 'header_nav', 'container' => '') ); ?>
							</nav>
							<div id="off-canvas-button" class="off-canvas-button" data-effect="st-effect-3">
								<div aria-label="Menu" class="hamburger hamburger--spin">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>

				<div class="page-wrap">
