// sharenow-admin.js
jQuery(document).ready(function($) {
    // On load.
    if($('.sharenow-buttons input[value=twitter]').is(':checked')) {
        // Show Twitter.
        $('.sharenow-twitter-container').show();
    }
    // On none.
    $('.sharenow-buttons input[type=checkbox]').on('click', function() {
        // Check.
        if($(this).val() == 'none') {
            // Each.
            $('.sharenow-buttons input').each(function() {
                // Check.
                if($(this).val() !== 'none') {
                    $(this).prop('checked', false);
                } else {
                    $(this).prop('checked', true);
                }
                // Hide Twitter.
                $('.sharenow-twitter-container').hide();
                // Clear.
                $('.sharenow-twitter-container input').val('');
            });
        } else {
            // Uncheck none.
            $('.sharenow-buttons input[value=none]').prop('checked', false);
            // Check value.
            if($(this).val() == 'twitter' && $(this).is(':checked')) {
                // Show Twitter.
                $('.sharenow-twitter-container').show();
            } else if($(this).val() == 'twitter' && $(this).not(':checked')) {
                // Hide Twitter.
                $('.sharenow-twitter-container').hide();
                // Clear.
                $('.sharenow-twitter-container input').val('');
            }
        }
    });
    // On manual.
    $('.sharenow-locations input').on('click', function() {
        // Check.
        if($(this).val() == 'manual') {
            // Each.
            $('.sharenow-locations input').each(function() {
                // Check.
                if($(this).val() !== 'manual') {
                    $(this).prop('checked', false);
                } else {
                    $(this).prop('checked', true);
                }
            });
        } else {
            $('.sharenow-locations input[value=manual]').prop('checked', false);
        }
    });
});
