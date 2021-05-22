<?php
/**
 * WP built in action hook.
 */
function add_to_save_post( $post_ID, $post, $update ) {
    // do stuff
}
add_action( 'save_post', 'add_to_save_post', 10, 3 );

// done by WP in core files
do_action( 'save_post', $post_ID, $post, $update );


/**
 * Custom made hook.
 */
function example_callback( $arg1, $arg2 ) {
    // do stuff
}
add_action( 'example_action', 'example_callback', 10, 2 );

// trigger the action hook
if ( has_action( 'example_action' ) ) {
    $value = do_action( 'example_action', $arg1, $arg2 );
}
