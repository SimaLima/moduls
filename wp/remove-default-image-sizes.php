<?php
/**
 * Remove default image sizes.
 *
 * @param array $sizes = array of image sizes
 *
 * @see https://developer.wordpress.org/reference/hooks/intermediate_image_sizes_advanced/
 */
function remove_default_image_sizes( $sizes ) {
    unset( $sizes['thumbnail'] );
    unset( $sizes['medium'] );
    unset( $sizes['large'] );

    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );


/**
 * Disable making image sizes for certain image types.
 *
 * @param array $sizes = array of image sizes
 * @param array $image_meta = image meta data
 */
function disable_upload_sizes_for_image_type( $sizes, $image_meta ) {

    // get filetype data
    $filetype = wp_check_filetype( $image_meta['file'] );

    $exclude_file_types = array(
        'image/gif',
    );

    // check if file type is on exclude list
    if ( in_array( $filetype['type'], $exclude_file_types ) ) {
        $sizes = array();
    }

    // return wanted sizes (none if image is gif)
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'disable_upload_sizes_for_image_type', 10, 2 );
