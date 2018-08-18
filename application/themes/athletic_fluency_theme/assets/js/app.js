window.GLOBAL = {
    nextBtn: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    prevBtn: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>'
}

var FeaturedAthletesSlider = require('./components/featured-athletes-slider');

$(document).ready(function () {
    FeaturedAthletesSlider.init();
});
