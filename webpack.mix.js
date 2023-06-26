const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles('resources/css/element.css', 'public/css/element.css')
    .styles('resources/css/owl_carousel.css', 'public/css/owl_carousel.css')
    .styles('resources/css/style.css', 'public/css/style.css')
    .styles('resources/css/responsive.css', 'public/css/responsive.css');

mix.js('resources/js/myapp.js', 'public/js/myapp.js')
    .js('resources/js/particles.min.js', 'public/js/particles.min.js')
    .js('resources/js/sliders.js', 'public/js/sliders.js');

mix.copyDirectory('resources/fonts/', 'public/fonts/')
    .copyDirectory('resources/assets/', 'public/assets/');
