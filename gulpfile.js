var gulp     = require('gulp'),
    elixir   = require('laravel-elixir');

require('laravel-elixir-sass-compass');
require('laravel-elixir-browserify-official');

var inProduction = elixir.config.production;
elixir.config.sourcemaps = false;
var baseThemePath = 'application/themes/athletic_fluency_theme';
elixir.config.assetsPath = baseThemePath + '/assets';

elixir(function (mix) {
    /* ----
    SCSS processing
    Requires sass-globbing Ruby
    ---- */
    mix.compass('app.scss', baseThemePath + '/css', {
        require: ['sass-globbing'],
        style: inProduction ? "compressed" : ""
    });

    mix.compass('slick.scss', baseThemePath + '/css', {
        require: ['sass-globbing'],
        style: inProduction ? "compressed" : ""
    });

    /* ----
    Scripts processing
    (with Browserify)
    ---- */
    mix.browserify('app.js', baseThemePath + '/js');
    mix.copy(baseThemePath + '/assets/js/vendors/slick.js', baseThemePath + '/js/vendors');

    /* ----
    Copy images over
    ---- */
    mix.copy(baseThemePath + '/assets/images', baseThemePath + '/images');
});