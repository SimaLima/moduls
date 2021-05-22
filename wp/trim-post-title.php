<?php
/**
 * Trim post title.
 *
 * Returns the shortened post title, must use in a loop.
 *
 * @return string
 *
 */
function trim_post_title() {

    // get current post's post_title
    $post_title = get_the_title();

    // if empty, set default title
    $title = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );

    // get post_title in desired length
    $post_title = mb_substr( $post_title, 0, 25 );

    // append ellipses
    $post_title .= '...';

    // return text
    return $post_title;
}
