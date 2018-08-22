exports.init = init;

function init() {
    $(' .featured-athletes-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: window.GLOBAL.prevBtn,
        nextArrow: window.GLOBAL.nextBtn,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}