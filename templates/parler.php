<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/parler.php' ); ?>
<a href="https://parler.com/new-post?message=<?php echo urlencode( $title ); ?>&url=<?php echo $link; ?>" target="_blank" class="sharenow-parler"><?php echo $svg; ?><span class="sharenow-label">Parler</span></a>
