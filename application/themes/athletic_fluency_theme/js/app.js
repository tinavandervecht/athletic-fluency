(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

window.GLOBAL = {
    nextBtn: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    prevBtn: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>'
};

var FeaturedAthletesSlider = require('./components/featured-athletes-slider');

$(document).ready(function () {
    FeaturedAthletesSlider.init();
});

},{"./components/featured-athletes-slider":2}],2:[function(require,module,exports){
'use strict';

exports.init = init;

function init() {
    $(' .featured-athletes-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: window.GLOBAL.prevBtn,
        nextArrow: window.GLOBAL.nextBtn,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }]
    });
}

},{}]},{},[1]);
