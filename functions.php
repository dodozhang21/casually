<?php
/**
 * casually functions and definitions
 *
 * @package casually
 * @since casually 1.0.0
 */

if ( ! function_exists( 'casually_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since casually 1.0.0
 */
function casually_setup() {
	/*
	add_theme_support('custom-header', array (
	        // Header image default
	       'default-image'			=> get_stylesheet_directory_uri() . '/images/default-logo.png'));*/
}
endif; // casually_setup
add_action( 'after_setup_theme', 'casually_setup' );


/**
 * Enqueue scripts and styles
 */
function casually_scripts() {
	
	wp_enqueue_style( 'googleFonts', '//fonts.googleapis.com/css?family=ABeeZee' );

}
add_action( 'wp_enqueue_scripts', 'casually_scripts' );
?>
