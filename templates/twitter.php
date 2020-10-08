<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/twitter.php' );

// Set blank handle.
$handle = '';

// Check for handle.
if( !empty( get_option( 'sharenow-twitter' ) ) ) {

    // Set handle.
    $handle = ' @' . get_option( 'sharenow-twitter' );

} ?>
<a href="https://twitter.com/share?url=<?php echo $link; ?>&text=<?php echo urlencode( $title . $handle . ' -' ); ?>" target="_blank" class="sharenow-twitter"><?php echo $svg; ?><span class="sharenow-label">Twitter</span></a>
