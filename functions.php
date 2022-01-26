<?php
/**
 * Symbiotica Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Symbiotica_Starter_Theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/*
* Include files and functions
*/
require_once( __DIR__ . '/inc/theme-settings.php');         // Initialize theme default settings.
require_once( __DIR__ . '/inc/theme-setup.php');            // Theme setup and custom theme supports.
require_once( __DIR__ . '/inc/theme-menus.php');            // Register theme menus.
require_once( __DIR__ . '/inc/theme-widgets.php');          // Register widget area.

require_once( __DIR__ . '/inc/enqueue.php');               // Enqueue scripts and styles.
require_once( __DIR__ . '/inc/ctp.php');                   // Register Custom Post types
require_once( __DIR__ . '/inc/image-sizes.php');           // Custom image sizes

require_once( __DIR__ . '/inc/theme-extras.php');          // Customize theme, extra settings
require_once( __DIR__ . '/inc/theme-cleanup.php');         // Cleaning worpdress garbage
require_once( __DIR__ . '/inc/shortcodes.php');            // Shortcodes
require_once( __DIR__ . '/inc/customizer.php');            // Theme customizer
require_once( __DIR__ . '/inc/hooks.php');                 // Theme Hooks
require_once( __DIR__ . '/inc/woo.php');                 // Woo

require_once( __DIR__ . '/inc/wp_bootstrap_mobile_navwalker.php'); 

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '
    <ul>
    <li><a href="https://screencast-o-matic.com/watch/c3Vbb8VoHLn" target="_blank">General Settings</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbbRVoHLg" target="_blank">Edit Menus</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFiVoHNz" target="_blank">Edit Homepage</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFYVoHPW" target="_blank">Edit SDAA</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFTVoHR1" target="_blank">Edit Education</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFuVoHRt" target="_blank">Edit Products</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFxVoHSi" target="_blank">Edit About</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFaVoHSw" target="_blank">Edit Contact</a></li>
    <li><a href="https://screencast-o-matic.com/watch/c3VbFAVoHSK" target="_blank">Edit Regular Page</a></li>
    </ul>';
}

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, 'class' => null ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'menu_class' => 'myclass', 'echo' => false ) );
    }
    
add_shortcode('menu', 'print_menu_shortcode');