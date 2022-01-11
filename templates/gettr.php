<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/gettr.php' ); ?>
<a href="https://gettr.com/share?text=<?php echo str_replace( '"', '', $title ) . ' &mdash; '; ?>&url=<?php echo $link; ?>" target="_blank" class="sharenow-gettr"><?php echo $svg; ?><span class="sharenow-label">Gettr</span></a>