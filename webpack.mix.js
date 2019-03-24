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



 /* CORE STYLES */
mix.sass('resources/sass/custom.scss', 'public/css');




 /* CORE SCRIPTS */
mix.js('resources/js/starwave.js', 'public/js');