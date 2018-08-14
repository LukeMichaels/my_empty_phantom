<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  // Modernizr
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.flexbox.js', array(), '2.7.1');

  // Custom Scripts
  wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/min/scripts-min.js', array( 'jquery' ), '', true );

  // Hamburger Menu
  wp_enqueue_script( 'hamburger-js', get_template_directory_uri() . '/assets/js/min/hamburgers-min.js');

	// Slider
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/js/slick/slick.css');
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick/slick.min.js');

  // Register main stylesheet
  wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
