(function ($) {
    "use strict";
    // Page loading
    $(window).on('load', function() {
        // $('#preloader-active').delay(450).fadeOut('slow');
        // $('body').delay(450).css({
        //     'overflow': 'visible'
        // });
        $("#onloadModal").modal('show');
    });

    /*-----Modal----*/

    $('.modal').on('shown.bs.modal', function (e) {
        $('.product-image-slider').slick('setPosition');
        $('.slider-nav-thumbnails').slick('setPosition');

        $('.product-image-slider .slick-active img').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
    })


})(jQuery);

