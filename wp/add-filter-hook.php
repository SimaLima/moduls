<?php
/**
 * WP built in filter hook.
 */
function modify_title( $title, $id ) {
    // do stuff
    return $title;
}
add_filter( 'the_title', 'modify_title', 10, 2 );

// done by WP in core files
apply_filters( 'the_title', $title, $id );


/**
 * Custom made filter hook.
 */
function example_callback( $string, $arg1, $arg2 ) {
    // do stuff
    return $string;
}
add_filter( 'example_filter', 'example_callback', 10, 3 );

// apply filter hook
if ( has_filter( 'example_filter' ) ) {
    $value = apply_filters( 'example_filter', 'string', $arg1, $arg2 );
}
