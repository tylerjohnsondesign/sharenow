<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/pinterest.php' ); ?>
<a href="https://pinterest.com/pin/create/button/?url=<?php echo $link; ?>&media=&description=<?php echo str_replace( '"', '', $title ); ?>" target="_blank" class="sharenow-pinterest"><?php echo $svg; ?><span class="sharenow-label">Pinterest</span></a>
