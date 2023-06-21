<?php
/**
 * Planty | Astra Thème Enfant Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Planty | Astra Thème Enfant
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PLANTY_ASTRA_THEME_ENFANT_VERSION', '1.0.0' );

/**
 * Enqueue styles - Theme.css 
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'planty-astra-theme-enfant-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_ASTRA_THEME_ENFANT_VERSION, 'all' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 * HOOK - Manually Select Logged in Menu in WordPress Using Code
 */

function my_wp_nav_menu_args( $args = '' ) {
if( is_user_logged_in() ) {
// Logged in menu to display
$args['menu'] = 9;
 
} else {
// Non-logged-in menu to display
$args['menu'] = 4;
}
return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/**
 * CONTACT FORM 7 - Eviter d'avoir des <p> partout dans CF7
 */
add_filter('wpcf7_autop_or_not', '__return_false');
