(function($) {
    'use strict';

    $(document).ready(function () {
        // Product list page
        $('#product-filter-btn').click(function(){
            var series = '';
            var prices = '';
            var newUrl = '';

            $('.filter-series:checked').each(function(i){
                if (i !== 0) {
                    series += '-';
                }

                series += $(this).data('id');
            });

            newUrl = window.location.href.split('?')[0] + '?';
            if (series !== '') {
                newUrl += 'series=' + series + '&';
            }

            prices = $('.price-slider').val().replace(',', '-');
            newUrl += 'prices=' + prices;

            window.location.href = newUrl;
        });
    });
})(jQuery);
