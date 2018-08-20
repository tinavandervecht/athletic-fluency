exports.init = init;

function init() {
    $(' .gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: window.GLOBAL.prevBtn,
        nextArrow: window.GLOBAL.nextBtn
    });

    $('.video-btn').on('click', function() {
        let url = $(this).data('url');
        $('#iframeYoutube').attr('src', url);
    })
}