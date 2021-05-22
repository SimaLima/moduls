<?php
/**
 * Pass variable to template part.
 *
 * @see https://make.wordpress.org/core/2020/07/17/passing-arguments-to-template-files-in-wordpress-5-5/
 */

/**
 * Before WP 5.5:
 */
set_query_var( 'data_name', $data );
$data = get_query_var( 'data_name' );

/**
 * WP 5.5 +
 */
get_template_part( 'template-parts/content-single', null, array('data' => $data) );
var_dump( $args );
