<?php
/**
 * TGMPA: install required plugins on theme activation.
 */

// require main class
require_once get_template_directory() . '/includes/plugins/tgmpa/class-tgm-plugin-activation.php';

function register_required_plugins() {

    $plugins = array(

        // require advanced custom fields
        array(
            'name'     => 'Advanced Custom Fields',
            'slug'     => 'advanced-custom-fields',
            'required' => true,
        ),

        // ...

    );

    // config
    $config = array(
        'id'           => 'package',
        'default_path' => '',
        'menu'         => 'install-required-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
    );

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'register_required_plugins' );
