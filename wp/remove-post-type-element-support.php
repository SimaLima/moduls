<?php
/**
 * Remove post_type element support.
 *
 * @see https://developer.wordpress.org/reference/functions/remove_post_type_support/
 */
function remove_post_type_element_support() {
    /**
     * Post_types: post/page/cpt...
     *
     * Arguments:
     *   - title
     *   - editor (content)
     *   - author
     *   - thumbnail (featured image -> must be support by theme)
     *   - excerpt
     *   - trackbacks
     *   - custom-fields
     *   - comments
     *   - revisions
     *   - page-attributes
     *   - post-formats
     *
     * Example: remove_post_type_support( 'post_type', 'argument' );
     */


    remove_post_type_support( 'post', 'revisions' );
    remove_post_type_support( 'page', 'excerpt' );
    remove_post_type_support( 'custom-post-type-name', 'editor' );

}
add_action( 'init', 'remove_post_type_element_support' );
