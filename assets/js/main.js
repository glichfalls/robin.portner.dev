(function ($) {

    const zoomed_images = [];


    $('.img-zoom').on('click', function () {
        $(this).toggleClass('open');
    })

    const iframes = document.querySelectorAll('.figma');

    console.log(iframes);

    iframes.forEach(e => {
        console.log('test');addEventListener('click', () => {
        console.log(this.src);
        this.src = this.dataset.src;
    })});

})(jQuery);