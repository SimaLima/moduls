<?php
/**
 * WP database methods.
 * Methods included:
 *   - insert
 *   - update
 *   - replace
 *   - delete
 *   - get_results
 *   - get_column
 *   - get_row
 *   - get_var
 *
 * @see https://developer.wordpress.org/reference/classes/wpdb/
 */


global $wpdb;
$table = $wpdb->prefix . 'table';


/**
 * Data types:
 *   %s - string,
 *   %d - integer,
 *   %f - float
 */


/**
 * INSERT:
 *   - first array (columns and values),
 *   - second array (data types)
 *
 * wpdb->insert(table, data, format);
 */
$insert = $wpdb->insert(
    $table,
    array('user_status' => (int) $id, 'display_name' => 'simun'),
    array('%d', '%s')
);


/**
 * REPLACE:
 *   - first array (data to replace/insert),
 *   - second array (where conditions)
 *
 * wpdb->replace(table, data, format);
 */
$replace = $wpdb->replace(
    $table,
    array('user_nicename' => 'simun', 'display_name' => 'simun'),
    array('%s', '%s')
);


/**
 * UPDATE:
 *   - first array (column to update),
 *   - second array (where conditions)
 *   - third array (data types of first array),
 *   - fourth array (data types of second array)
 *
 * wpdb->update(table, data, where, format = null, where_format = null);
 */
$update = $wpdb->update(
    $table,
    array('user_nicename' => 'simun'),
    array('id' => $id, 'user_nicename' => 'admin' ),
    array('%s'),
    array('%d', '%s')
);


/**
 * DELETE:
 *   - first array (row),
 *   - second array (data types)
 *
 * wpdb->delete(table, where, where_format = null);
 */
$delete = $wpdb->delete( $table, array('id' => 1), array('%d') );


/**
 * GET_VARIABLE
 * Returns single result, cell, or some aggregate function value.
 */
$get_variable = $wpdb->get_var( "SELECT COUNT(*) FROM $table" );


/**
 * GET_ROW
 * Returns single row.
 */
$get_row = $wpdb->get_row( "SELECT * FROM $table WHERE id = $id" );


/**
 * GET_COLUMN
 * Returns single column.
 */
$get_column = $wpdb->get_col( "SELECT user_nicename FROM $table WHERE id = $id" );


/**
 * GET_RESULTS
 * Returns multiple results.
 */
$results = $wpdb->get_results( "SELECT user_login, user_nicename FROM $table WHERE id = $id" );
