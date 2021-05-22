<?php
/**
 * Localize script.
 */
function localize_scripts() {
    wp_localize_script( 'wp-ajax', 'LOCALIZE', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),

        'security' => wp_create_nonce( 'wp-ajax-nonce' ), // dynamic nonce
        // one or another (||)
        'security_stat' => 'c214gd5315' // static nonce
        )
    );
}
add_action( 'wp_enqueue_scripts', 'localize_scripts' );
