<?php
/**
 * D4TW register theme styles
 *
 * @package understrap
 */

// Add the theme fonts
function d4tw_enqueue_fonts () {
	wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans' );
	wp_enqueue_style( 'Chicle', 'https://fonts.googleapis.com/css?family=Chicle' );
	wp_enqueue_style( 'Abel', 'https://fonts.googleapis.com/css?family=Abel' );
    wp_enqueue_style( 'Flipclock CSS', get_stylesheet_directory_uri() . '/flipclock/flipclock.css' );
    wp_enqueue_style( 'AOS CSS', get_stylesheet_directory_uri() . '/aos/aos.css' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_fonts');
