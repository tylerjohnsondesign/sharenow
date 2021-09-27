<?php
/**
Create buttons.
**/
function sharenow_create_buttons( $id ) {

    // Set blank.
    $active_buttons = [];

    // Get options.
    if( !empty( get_option( 'sharenow-buttons' ) ) ) {

        // Get active buttons.
        $active_buttons = get_option( 'sharenow-buttons' );

    }

    // Set variables.
    $link       = get_permalink( $id );
    $short      = wp_get_shortlink( $id );
    $title      = urlencode( get_the_title( $id ) );

    // Get buttons.
    $buttons = sharenow_button_options();

    // Set HTML.
    $HTML = '';

    // Set output buffer.
    ob_start(); ?>

    <div class="sharenow-buttons"><?php

        // Loop through buttons.
        foreach( $buttons as $button ) {

            // Check.
            if( in_array( $button, $active_buttons ) ) {

                // Get button template.
                include SHARENOW_PATH . 'templates/' . $button  . '.php';

            }

        } ?>

    </div><?php

    // Get.
    $HTML = ob_get_contents();

    // Clean.
    ob_end_clean();

    // Return.
    return $HTML;

}
