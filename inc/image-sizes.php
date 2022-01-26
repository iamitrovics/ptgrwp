<?php
/**
 * Custom image sizes
 *
 * @package Symbiotica_Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('full-image', 1920, 9999, FALSE);
add_image_size('half-image', 800, 9999, FALSE);

// home
add_image_size('feat-image', 380, 300, TRUE);

// sdaa
add_image_size('sdaa-image', 980, 670, TRUE);
add_image_size('invest-image', 440, 235, TRUE);

// About
add_image_size('team-image', 340, 300, TRUE);