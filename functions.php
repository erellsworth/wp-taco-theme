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

function taco_setup(){
	add_theme_support( 'menus' );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top', 'wp-taco-theme' )
	) );	
}

add_action( 'after_setup_theme', 'taco_setup' );

function wp_taco_scripts(){
	//fonts
	wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css' );
	//see https://fontawesome.com for usage
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i|Lobster+Two:400,400i,700,700i' );
	
	//flex grid
	//see http://flexboxgrid.com/ for usage
	wp_enqueue_style( 'flexboxgrid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'wp-taco-styles', get_stylesheet_uri() );	

	//JavaScript
	wp_enqueue_script( 'taco-script', get_theme_file_uri( '/js/tacos.js' ), array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'wp_taco_scripts' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">...Read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');