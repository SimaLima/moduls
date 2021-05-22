<?php
/**
 * Gutenberg - DISABLE it on certain pages.
 *
 * Compare current page with excluded pages and disable gutenberg if matches.
 *
 * @see https://developer.wordpress.org/reference/functions/use_block_editor_for_post_type/
 */
function disable_gutenberg_on_pages( $use_block_editor, $post_type ) {

    // must be admin & post_type = page
    if (
        ! is_admin() ||
        empty( $_GET['post'] ) ||
        $post_type != 'page'
    ) {
        return $use_block_editor;
    }

    // list of PAGES where NOT to use gutenberg (front_page & blog)
    $excluded_ids = array(
        get_option( 'page_on_front' ),
        get_option( 'page_for_posts' ),
    );

    // list of PAGE TEMPLATES where NOT to use gutenberg
    $excluded_templates = array(
        'page-templates/about-us.php',
        'page-templates/contact.php',
    );


    // get template slug
    $id = (int) $_GET['post'];
    $template = get_page_template_slug( $id );


    // if template slug is in excluded_templates ||
    // page_id is in excluded_ids -> disable gutenberg
    if (
        in_array( $template, $excluded_templates ) ||
        in_array( $id, $excluded_ids )
    ) {
        $use_block_editor = false;
    }

    return $use_block_editor;

}
add_filter( 'gutenberg_can_edit_post_type', 'disable_gutenberg_on_pages', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_on_pages', 10, 2 );



/**
 * Gutenberg - DISABLE it on certain post types.
 *
 * Check for specific post_type and disable gutenberg if matches.
 *
 * @see https://developer.wordpress.org/reference/functions/use_block_editor_for_post_type/
 */
function disable_gutenberg_selectively( $use_block_editor, $post_type ) {
    if ( 'page' === $post_type ) {
        return false;
    }

    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg_selectively', 10, 2 );



/**
 * Gutenberg - ENABLE editor on certain post type.
 *
 * Check for specific post_type and enable gutenberg if matches.
 *
 * @see https://developer.wordpress.org/reference/functions/use_block_editor_for_post_type/
 */
function enable_gutenberg_selectively( $use_block_editor, $post_type ) {

    if ( $post_type == 'post' ) {
        return true;
    }

    return false;
}
add_filter( 'use_block_editor_for_post_type', 'enable_gutenberg_selectively', 10, 2 );



/**
 * Gutenberg - DISABLE editor globally.
 *
 * Disable gutenberg on all places where it's used.
 *
 * @see https://developer.wordpress.org/reference/hooks/use_block_editor_for_post/
 */
add_filter( 'use_block_editor_for_post', '__return_false', 10 );
