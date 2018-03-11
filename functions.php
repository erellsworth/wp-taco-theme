<?php
/**
 * Taco functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage WP_Taco_Theme
 * @since 1.0
 */

function wp_taco_scripts(){
	//fonts
	wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css' );
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Amaranth|Lobster+Two:400,400i,700,700i' );
//
	// Theme stylesheet.
	wp_enqueue_style( 'wp-taco-styles', get_stylesheet_uri() );	
}

add_action( 'wp_enqueue_scripts', 'wp_taco_scripts' );