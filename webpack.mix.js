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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.js('node_modules/jquery/dist/jquery.min.js','public/js/jquery.js');

mix.styles('node_modules/bootstrap/dist/css/bootstrap.min.css','public/css/theme.css');

mix.js('node_modules/bootstrap/dist/js/bootstrap.min.js','public/js/theme.js');


