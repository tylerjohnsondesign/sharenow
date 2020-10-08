<?php
/**
Add menu page.
**/
add_action( 'admin_menu', 'sharenow_admin_page' );
function sharenow_admin_page() {

    // Add options page.
    add_options_page(
        'Share Now',
        'Share Now',
        'manage_options',
        'share-now',
        'sharenow_page_contents'
    );

}

/**
Settings page contents.
**/
function sharenow_page_contents() {

    // Check for $_POST.
    if( !empty( $_POST ) ) {

        // Save values.
        foreach( $_POST as $key => $value ) {

            // Save.
            update_option( $key, $value );

        }

    }

    // Set blank Twitter.
    $twitter = '';

    // Get options.
    if( !empty( get_option( 'sharenow-buttons' ) ) ) {

        // Get active buttons.
        $active_buttons = get_option( 'sharenow-buttons' );

    }
    if( !empty( get_option( 'sharenow-locations' ) ) ) {

        // Get active locations.
        $active_locations = get_option( 'sharenow-locations' );

    }
    if( !empty( get_option( 'sharenow-twitter' ) ) ) {

        // Get Twitter handle.
        $twitter = get_option( 'sharenow-twitter' );

    } ?>

    <div class="wrap sharenow-admin">
        <div class="sharenow-header">
            <?php
            // Get ShareNow.
            include SHARENOW_PATH . 'assets/svg/sharenow.php'; ?>
        </div>
        <div class="sharenow-body">
            <form method="POST" id="sharenow-options">
                <div class="sharenow-section sharenow-buttons">
                    <h2>Buttons</h2>
                    <div class="sharenow-buttons-container"><?php

                        // Get buttons.
                        $buttons = sharenow_button_options();

                        // Add.
                        $buttons[] = 'none';

                        // Loop through.
                        foreach( $buttons as $button ) {

                            // Set blank checked.
                            $checked = '';

                            // Check for checked.
                            if( in_array( $button, $active_buttons ) ) {

                                // Set checked.
                                $checked = ' checked';

                            } ?>
                            <div class="sharenow-active-button-single">
                                <input type="checkbox" name="sharenow-buttons[]" value="<?php echo $button; ?>"<?php echo $checked; ?> /><span class="sharenow-active-button"><?php echo ucfirst( $button ); ?></span>
                            </div><?php

                        } ?>
                        <div class="sharenow-twitter-container" style="display:none">
                            <label for="sharenow-twitter">Twitter Handle</label>
                            <input type="text" name="sharenow-twitter" value="<?php echo $twitter; ?>" />
                        </div>
                    </div>
                </div>
                <div class="sharenow-section sharenow-locations">
                    <h2>Locations</h2><?php

                    // Set locations.
                    $locations = [ 'before-content', 'after-content', 'manual' ];

                    // Loop.
                    foreach( $locations as $location ) {

                        // Set blank checked.
                        $checked = '';

                        // Check for checked.
                        if( in_array( $location, $active_locations ) ) {

                            // Set checked.
                            $checked = ' checked';

                        } ?>

                        <input type="checkbox" name="sharenow-locations[]" value="<?php echo $location; ?>"<?php echo $checked; ?> /><span class="sharenow-active-location"><?php echo ucwords( str_replace( '-', ' ', $location ) ); ?></span><?php

                    } ?>
                    <p>To place the share buttons manually, please use the shortcode:</p><pre>[sharenow]</pre><p>...or embed via PHP using:</p><pre>echo do_shortcode( '[sharenow]' );</pre>
                </div>
                <div class="sharenow-section sharenow-submit">
                    <input type="submit" value="Save" />
                </div>
            </form>
        </div>
        <div class="sharenow-footer">
            &copy; <?php echo date( 'Y' ); ?> <a href="https://tylerjohnsondesign.com" target="_blank">Tyler Johnson Design</a>. All Rights Reserved.
        </div>
    </div><?php

}
