<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/twitter.php' );

// Set blank handle.
$handle = '';

// Check for handle.
if( !empty( get_option( 'sharenow-twitter' ) ) ) {

    // Set handle.
    $handle = ' via @' . get_option( 'sharenow-twitter' );

} ?>
<a href="https://twitter.com/share?url=<?php echo $short; ?>&text=<?php echo str_replace( '"', '', $title ) . $handle . ' -'; ?>" target="_blank" class="sharenow-twitter"><?php echo $svg; ?><span class="sharenow-label">Twitter</span></a>
