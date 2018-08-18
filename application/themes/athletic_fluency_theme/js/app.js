(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

window.GLOBAL = {
    nextBtn: '<button type="button" class="slick-next"><span class="fa fa-angle-right"></span></button>',
    prevBtn: '<button type="button" class="slick-prev"><span class="fa fa-angle-left"></span></button>'
};

var FeaturedAthletesSlider = require('./components/featured-athletes-slider');
var Map = require('./components/map');

$(document).ready(function () {
    FeaturedAthletesSlider.init();
    Map.init();
});

},{"./components/featured-athletes-slider":2,"./components/map":3}],2:[function(require,module,exports){
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

},{}],3:[function(require,module,exports){
"use strict";

exports.init = init;

function init() {
    google.maps.event.addDomListener(window, 'load', loadMap);
}

function loadMap() {
    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(42.988930, -81.216833),
        styles: [{ "featureType": "all", "elementType": "labels.text.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "all", "elementType": "labels.text.stroke", "stylers": [{ "visibility": "off" }] }, { "featureType": "all", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#c9323b" }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#c9323b" }, { "weight": 1.2 }] }, { "featureType": "administrative.locality", "elementType": "geometry.fill", "stylers": [{ "lightness": "-1" }] }, { "featureType": "administrative.neighborhood", "elementType": "labels.text.fill", "stylers": [{ "lightness": "0" }, { "saturation": "0" }] }, { "featureType": "administrative.neighborhood", "elementType": "labels.text.stroke", "stylers": [{ "weight": "0.01" }] }, { "featureType": "administrative.land_parcel", "elementType": "labels.text.stroke", "stylers": [{ "weight": "0.01" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#c9323b" }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#99282f" }] }, { "featureType": "road", "elementType": "geometry.stroke", "stylers": [{ "visibility": "off" }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#99282f" }] }, { "featureType": "road.highway.controlled_access", "elementType": "geometry.stroke", "stylers": [{ "color": "#99282f" }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#99282f" }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#99282f" }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#99282f" }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#090228" }] }]
    };

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);

    var markerIcon = {
        url: CCM_THEME_PATH + "/images/icons/marker.png",
        scaledSize: new google.maps.Size(30, 39)
    };
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(42.985700, -81.240400),
        map: map,
        icon: markerIcon
    });
}

},{}]},{},[1]);
