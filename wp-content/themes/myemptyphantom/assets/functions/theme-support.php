<?php

// Adding WP Functions & Theme Support
function juno_theme_support() {

	// Add Menu Support
	add_theme_support('menus');

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default image sizes
	set_post_thumbnail_size(250, 250, true);
	add_image_size('large', 1050, '', true); // Large Thumbnail
	add_image_size('medium', 750, '', true); // Medium Thumbnail
	add_image_size('small', 550, '', true); // Small Thumbnail

	// Custom image sizes
	add_image_size('hero', 1500, '', false); // Hero Image

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
		array(
			'search-form',
		)
	);

} /* end theme support */
