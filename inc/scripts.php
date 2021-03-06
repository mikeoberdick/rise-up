<?php
/**
 * Register theme scripts
 *
 * @package understrap
 */

// Add the Javascript
function d4tw_enqueue_scripts () {
	wp_enqueue_script( 'Font Awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'D4TW Theme JS', get_stylesheet_directory_uri() . '/js/d4tw.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'AOS JS', get_stylesheet_directory_uri() . '/aos/aos.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Flipclock JS', get_stylesheet_directory_uri() . '/flipclock/flipclock.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'd4tw_enqueue_scripts' );
