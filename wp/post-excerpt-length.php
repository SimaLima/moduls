<?php
/**
 * Trim post excerpt.
 *
 * Shorten the excerpt length to 'n' words. Must use in loop.
 *
 * @param string $limit = number of characters
 * @return string
 */
function package_excerpts_filter( $limit ) {
    return wp_trim_words( get_the_excerpt(), $limit, '&hellip;' );
}
