const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/app.js','resources/js/bootstrap.js','resources/js/jquery-3.2.1.min.js','resources/js/jquery-migrate-3.0.0.js','resources/js/jquery.stellar.min.js','resources/js/jquery.waypoints.min.js','resources/js/main.js','resources/js/owl.carousel.min.js','resources/js/popper.min.js'], 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles(['resources/css/animate.css','resources/css/owl.carousel.min.css','resources/css/style.css'], 'public/css/all.css');
    