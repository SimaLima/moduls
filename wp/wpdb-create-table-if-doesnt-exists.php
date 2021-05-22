<?php
/**
 * Create table if not found in database.
 */
global $wpdb;
$table_name = $wpdb->base_prefix . 'table';
$query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );

if ( ! $wpdb->get_var( $query ) == $table_name ) {
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        field1 bigint(20) UNSIGNED NOT NULL DEFAULT 0,
        field2 varchar(1500) NOT NULL DEFAULT '',
        field3 tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
        PRIMARY KEY (id),
        KEY (field1)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
