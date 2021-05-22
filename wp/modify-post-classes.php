<?php
/**
 * Modify post classes.
 *
 * @param string[] $classes = array of post class names
 * @param string[] $class = array of additional class names
 * @param int $post_id = post id
 *
 * @see https://developer.wordpress.org/reference/hooks/post_class/
 */
function modify_post_classes( $classes, $class, $post_id ) {

    // add class
    if ( get_comments_number( $post_id ) == 0 ) {
        $classes[] = 'no-comments';
    }

    // remove class
    $class_key = array_search( 'grid', $classes );
    if ( $class_key !== false ) {
        unset( $classes[ $class_key ] );
    }


    return $classes;
}
add_filter( 'post_class', 'modify_post_classes', 10, 3 );
