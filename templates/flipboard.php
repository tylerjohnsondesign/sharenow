<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/flipboard.php' ); ?>
<a href="https://share.flipboard.com/bookmarklet/popout?url=<?php echo $link; ?>&title=<?php echo str_replace( '"', '', $title ); ?>" target="_blank" class="sharenow-flipboard"><?php echo $svg; ?><span class="sharenow-label">Flipboard</span></a>
