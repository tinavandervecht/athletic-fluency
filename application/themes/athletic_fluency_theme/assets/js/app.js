window.GLOBAL = {
    nextBtn: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    prevBtn: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>'
}

require('bootstrap-sass');

var FeaturedAthletesSlider = require('./components/featured-athletes-slider');
var GallerySlider = require('./components/gallery-slider');
var Map = require('./components/map');

$(document).ready(function () {
    FeaturedAthletesSlider.init();
    GallerySlider.init();
    Map.init();
});
