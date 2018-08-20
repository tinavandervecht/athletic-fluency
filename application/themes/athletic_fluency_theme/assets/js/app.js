window.GLOBAL = {
    nextBtn: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    prevBtn: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>'
}

import 'bootstrap-sass';

import FeaturedAthleteSlider from './components/featured-athletes-slider';
import GallerySlider from './components/gallery-slider';
import AnimatePageScroll from './components/animate-page-scroll';
import GoogleMap from './components/map';

$(document).ready(function () {
    FeaturedAthleteSlider.init();
    GallerySlider.init();
    GoogleMap.init();

    /*-- Desktop Navigation Click Functionality --*/
    $('.site_nav a').click(function(e) {
        e.preventDefault();
        let sectionID = $(this).attr('href');

        AnimatePageScroll.init(sectionID);
    });

    /*-- Mobile Navigation Toggling --*/
    $('.mobile_menu_btn, .mobile_nav .close_nav, .mobile_nav_overlay').click(function() {
        $('.mobile_nav').toggleClass('open');
        $('.mobile_nav_overlay').toggleClass('open');
    })

    /*-- Mobile Navigation Click Functionality --*/
    $('.mobile_nav a').click(function(e) {
        e.preventDefault();
        let sectionID = $(this).attr('href');

        $('.mobile_nav').removeClass('open');
        $('.mobile_nav_overlay').removeClass('open');

        AnimatePageScroll.init(sectionID);
    })

});
