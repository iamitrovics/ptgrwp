<?php
/**
 * cf enqueue scripts
 *
 * @package Symbiotica_Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'symb_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function symb_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'cf-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'cf-styles-fancybox', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css');
		wp_enqueue_style( 'cf-styles-video', get_stylesheet_directory_uri() . '/css/vidbg.css');

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'cf-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'cf-scripts-fancy', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), $js_version, true );
		wp_enqueue_script( 'cf-paralax', get_template_directory_uri() . '/js/parallax.min.js', array(), $js_version, true );
		wp_enqueue_script( 'cf-scripts-match', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), $js_version, true );
		wp_enqueue_script( 'cf-scripts-wow', get_template_directory_uri() . '/js/wow.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'symb_scripts' ).

add_action( 'wp_enqueue_scripts', 'symb_scripts' );