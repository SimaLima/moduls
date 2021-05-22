<?php
/**
* Enqueue theme scripts and styles.
*
* @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
*/
function theme_scripts() {
    /**
    * FILE VERSIONING
    */
    $theme_ver = '1.0.0';
    $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
    $script_ver = filemtime( get_stylesheet_directory() . '/assets/js/script.js' );

    /**
    * SCRIPTS
    */
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', $style_ver );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), $script_ver, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


/**
* Enqueue admin scripts and styles.
*
* @see https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
*/
function admin_scripts() {
    /**
    * FILE VERSIONING
    */
    $theme_ver = '1.0.0';
    $admin_style_ver = filemtime( get_stylesheet_directory() . '/admin/assets/css/admin-style.js' );
    $admin_script_ver = filemtime( get_stylesheet_directory() . '/admin/assets/js/admin-script.js' );

    /**
    * ADMIN SCRIPTS
    */
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/admin/assets/css/admin-style.css', false, $admin_style_ver );
    wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/admin/assets/js/admin-script.js', array( 'jquery' ), $admin_script_ver, true );
}
add_action( 'admin_enqueue_scripts', 'admin_scripts' );


/**
 * Enqueue style in parent theme, child theme and plugin.
 */
// Inside a parent theme
wp_enqueue_style( 'style', get_stylesheet_uri() . '/css/style.css', false, '1.0', 'all' );
// Inside a child theme
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/style.css', false, '1.0', 'all' );
// Inside a plugin
wp_enqueue_style( 'style', plugins_url( '/css/style.css', __FILE__ ), false, '1.0', 'all' );
