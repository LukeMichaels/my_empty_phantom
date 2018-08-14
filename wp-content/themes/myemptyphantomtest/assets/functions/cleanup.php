<?php

// Fire all our initial functions at the start
add_action('after_setup_theme','starter_start', 16);

function starter_start() {

	// launching operation cleanup
	add_action('init', 'starter_head_cleanup');

	// clean up gallery output in wp
	add_filter('gallery_style', 'starter_gallery_style');

	// launching this stuff after theme setup
	starter_theme_support();

	// cleaning up excerpt
	add_filter('excerpt_more', 'starter_excerpt_more');

} /* end starter start */

//The default wordpress head is a mess. Let's clean it up by removing all the junk we don't need.
function starter_head_cleanup() {
	// Remove category feeds
	// remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds
	// remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version
	remove_action( 'wp_head', 'wp_generator' );
} /* end starter head cleanup */

// Remove injected CSS from gallery
function starter_gallery_style($css) {
	return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

// This removes the annoying […] to a Read More link
function starter_excerpt_more($more) {
	global $post;
	// edit here if you like
return '...<a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'starterwp') . get_the_title($post->ID).'">'. __('Read more &raquo;', 'starterwp') .'</a>';
}
