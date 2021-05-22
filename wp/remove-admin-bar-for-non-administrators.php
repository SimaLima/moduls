<?php
/**
 * Remove admin bar for all users except administrators.
 *
 * @see https://developer.wordpress.org/reference/functions/show_admin_bar/
 */
function remove_admin_bar() {
    if ( ! current_user_can( 'administrator' ) && ! is_admin() ) {
        show_admin_bar(false);
    }
}
add_action( 'after_setup_theme', 'remove_admin_bar' );
