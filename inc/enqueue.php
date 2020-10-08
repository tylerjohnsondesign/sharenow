<?php
/**
Enqueue.
**/
add_action( 'wp_enqueue_scripts', 'sharenow_enqueue' );
function sharenow_enqueue() {

    // CSS.
    wp_enqueue_style( 'sharenow-css', SHARENOW_URI . 'assets/css/sharenow.css', [], SHARENOW_VERSION, 'all' );

}

/**
Admin.
**/
add_action( 'admin_enqueue_scripts', 'sharenow_admin_enqueue' );
function sharenow_admin_enqueue() {

    // CSS.
    wp_enqueue_style( 'sharenow-admin-css', SHARENOW_URI . 'assets/css/admin.css', [], SHARENOW_VERSION, 'all' );

    // JS.
    wp_enqueue_script( 'sharenow-admin-js', SHARENOW_URI . 'assets/js/admin.js', [ 'jquery' ], SHARENOW_VERSION, true );

}
