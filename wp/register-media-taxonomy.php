<?php
/**
 * Register new media category taxonomy.
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
function add_media_category_taxonomy() {
    $labels = array(
        'name'              => 'Categories',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Categories',
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent',
        'parent_item_colon' => 'Parent:',
        'edit_item'         => 'Edit',
        'update_item'       => 'Update',
        'add_new_item'      => 'Add New',
        'new_item_name'     => 'New Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'has_archive'       => true,
        'query_var'         => true,
        'rewrite'           => true,
        'show_admin_column' => true,
    );

    register_taxonomy( 'media-categories', 'attachment', $args );
}
add_action( 'init', 'add_media_category_taxonomy' );


/**
 * Register new media tag taxonomy.
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
function add_media_tag_taxonomy() {
    $labels = array(
        'name'              => 'Tags',
        'singular_name'     => 'Tag',
        'search_items'      => 'Search Tags',
        'all_items'         => 'All Tags',
        'parent_item'       => 'Parent',
        'parent_item_colon' => 'Parent:',
        'edit_item'         => 'Edit',
        'update_item'       => 'Update',
        'add_new_item'      => 'Add New',
        'new_item_name'     => 'New Name',
        'menu_name'         => 'Tags',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'has_archive'       => true,
        'query_var'         => true,
        'rewrite'           => true,
        'show_admin_column' => true,
    );

    register_taxonomy( 'media-tags', 'attachment', $args );
}
add_action( 'init', 'add_media_tag_taxonomy' );
