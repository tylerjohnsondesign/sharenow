<?php
// Get icon.
$svg = sharenow_html( 'assets/svg/reddit.php' ); ?>
<a href="https://reddit.com/submit?url=<?php echo $link; ?>&title=<?php echo $title; ?>" target="_blank" class="sharenow-reddit"><?php echo $svg; ?><span class="sharenow-label">Reddit</span></a>
