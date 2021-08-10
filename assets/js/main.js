(function ($) {

    $('.img-zoom').on('click', function () {
        $(this).toggleClass('open');
    })

    const iframes = document.querySelectorAll('.figma');

    iframes.forEach(e => {
        console.log('test');addEventListener('click', () => {
        console.log(this.src);
        this.src = this.dataset.src;
    })});

    $('.menu-toggle').on('click', function () {
        $('.hamburger, .navigation').toggleClass('is-active');
    });

    $('a').on('click', function () {
        $('.hamburger, .navigation').removeClass('is-active');
    });

})(jQuery);