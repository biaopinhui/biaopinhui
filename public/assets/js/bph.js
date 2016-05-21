(function($) {
    'use strict';

    $(document).ready(function () {
        // Product list page
        $('#product-filter-btn').click(function(){
            var series = '';
            $('.filter-series:checked').each(function(i){
                if (i !== 0) {
                    series += '-';
                }

                series += $(this).data('id');
            });

            if (series !== '') {
                var baseUrl = window.location.href.split('?')[0];
                var newUrl = baseUrl + '?series=' + series;
                window.location.href = newUrl;
            }
        });
    });
})(jQuery);
