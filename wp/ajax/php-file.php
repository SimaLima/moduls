<?php
/**
 * PHP file responsible for receiving and handling ajax request on server.
 */
function ajax_callback() {

    // prevent form data submision for unauthorized users
    if( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // STATIC NONCE check:
    $static_nonce = 'c214gd5315';
    if( $_POST[ 'security_stat' ] != $static_nonce ) {
        return;
    }

    // DYNAMIC NONCE check:
    if( ! check_ajax_referer( 'wp-ajax', 'security' ) ) {
        return;
    }


    // if value not set or if empty -> throw error
    if ( ! isset( $_POST['data'] ) || empty( trim( $_POST['data'] ) ) ) {
        wp_send_json_error( 'Value is missing.' );
    }


    // do something...


    // send data back to JS
    wp_send_json_success($new_data);
}


// not logged in users
add_action( 'wp_ajax_nopriv_ajax_callback', 'ajax_callback' );

// logged in users
add_action( 'wp_ajax_ajax_callback', 'ajax_callback' );
