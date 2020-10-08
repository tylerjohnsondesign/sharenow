<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/email.php' ); ?>
<a href="mailto:friend@example.com?&subject=<?php echo $title; ?>&body=<?php echo $link; ?>" target="_blank" class="sharenow-email"><?php echo $svg; ?></a>
