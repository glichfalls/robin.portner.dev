(function ($) {

    $('.img-zoom').on('click', function () {
        $(this).toggleClass('open');
    })

    $('.figma').on('click', function () {
        $(this).html('<iframe src="' + $(this).data('src') + '" allowfullscreen></iframe>')
    });

    $('.menu-toggle').on('click', function () {
        $('.hamburger, .navigation').toggleClass('is-active');
    });

    $('a').on('click', function () {
        $('.hamburger, .navigation').removeClass('is-active');
    });

})(jQuery);