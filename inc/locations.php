<?php
/**
Display buttons automatically.
**/
add_filter( 'the_content', 'sharenow_button_locations', 9999 );
function sharenow_button_locations( $content ) {

    // Set empty locations.
    $active_locations = '';

    // Get locations.
    if( !empty( get_option( 'sharenow-locations' ) ) ) {

        // Get active locations.
        $active_locations = get_option( 'sharenow-locations' );

    }

    // Check for single.
    if( is_single() ) {

        // Check for locations.
        if( !empty( $active_locations ) ) {

            // Create buttons.
            $buttons = sharenow_create_buttons( get_the_ID() );

            // Loop.
            foreach( $active_locations as $location ) {

                // Check.
                if( $location == 'before-content' ) {

                    // Add to content.
                    $content = $buttons . $content;

                } elseif( $location == 'after-content' ) {

                    // Add to content.
                    $content = $content . $buttons;

                }

            }

        }

    }

    // Return content.
    return $content;

}

/**
Manual placement.
**/
add_shortcode( 'sharenow', 'sharenow_button_shortcode' );
function sharenow_button_shortcode() {

    // Get buttons.
    $buttons = sharenow_create_buttons( get_the_ID() );

    // Return.
    return $buttons;

}
