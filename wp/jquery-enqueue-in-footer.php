<?php
/**
 * Enqueue jQuery in footer.
 */
// 1st way
wp_scripts()->add_data( 'jquery', 'group', 1 );
wp_scripts()->add_data( 'jquery-core', 'group', 1 );
wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
wp_enqueue_script( 'jquery' );

// 2nd way
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
wp_enqueue_script( 'jquery' );

// 3rd way
wp_enqueue_script( 'jquery', false, array(), false, true );
wp_enqueue_script( 'jquery-core', false, array(), false, true );
wp_enqueue_script( 'jquery-migrate', false, array(), false, true );
