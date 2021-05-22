<?php
/**
* Dequeue plugin scripts and styles.
*
* Check if not on some page/post... and dequeue scripts.
* Most of plugins require scripts only on certain pages and they don't need to
* be loaded globally.
*/
function dequeue_plugin_scripts() {
    if ( ! is_page_template( 'page-templates/contact.php' ) ) {
        wp_dequeue_style( 'contact-form-7' );
        wp_dequeue_script( 'contact-form-7' );
    }
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugin_scripts', 100 );
