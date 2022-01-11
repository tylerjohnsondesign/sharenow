<?php
/**
Return files.
**/
function sharenow_html( $path ) {

    // Set return.
    $return = '';

    // Start output buffering.
    ob_start();

    // Get.
    include SHARENOW_PATH . $path;

    // Insert.
    $return = ob_get_contents();

    // Close.
    ob_end_clean();

    // Return.
    return $return;

}

/**
Button options.
**/
function sharenow_button_options() {

    // Set array.
    $buttons = [ 'facebook', 'twitter', 'gettr', 'reddit', 'linkedin', 'telegram', 'gab', 'pinterest', 'flipboard', 'email', 'print' ];

    // Return.
    return $buttons;

}
