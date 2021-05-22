<?php
/**
 * Register selection of default header images.
 *
 * This enables users to use default image until they upload their own.
 * Thumbnail size - max-width: 600px
 *
 * @see https://developer.wordpress.org/reference/functions/register_default_headers/
 */
register_default_headers( array(
    'digital_art' => array(
        'url'            => get_template_directory_uri() . '/assets/images/headers/image-1.jpg',
        'thumbnail_url'  => get_template_directory_uri() . '/assets/images/headers/image-1-thumbnail.jpg',
        'description'    => 'Description',
    ),
    'night_and_mountain' => array(
        'url'            => get_template_directory_uri() . '/assets/images/headers/image-2.jpg',
        'thumbnail_url'  => get_template_directory_uri() . '/assets/images/headers/image-2-thumbnail.jpg',
        'description'    => 'Description',
    ),
    'programming' => array(
        'url'            => get_template_directory_uri() . '/assets/images/headers/image-3.jpg',
        'thumbnail_url'  => get_template_directory_uri() . '/assets/images/headers/image-3-thumbnail.jpg',
        'description'    => 'Description',
    ),
) );
