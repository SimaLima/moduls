<?php
/**
 * Fetch embed HTML for URL.
 *
 * @param string $url = url that should be embedded
 * @param array/string $args = additional arguments
 * @return string/false
 *
 * @see https://developer.wordpress.org/reference/functions/wp_oembed_get/
 */
$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?1234556789102' );

if ( $embed_code !== false ) {
    echo 'embed code' . $embed_code;
} else {
    echo 'embed code is false';
}
