let mix = require('laravel-mix');

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

mix.copy('node_modules/font-awesome', 'public/libs/font-awesome')
    .copy('node_modules/materialize-css', 'public/libs/materialize')
    .copy('node_modules/jquery/dist', 'public/libs/jquery')
    .copy('node_modules/sweetalert', 'public/libs/sweetalert')
    .copy('node_modules/animate.css/animate.min.css', 'public/libs/animate')
    .copy('node_modules/jquery.maskedinput/src/jquery.maskedinput.js', 'public/libs/jquery.maskedinput.js');

mix.copy('resources/assets/img', 'public/images');

mix.js('resources/assets/js/main.js', 'public/js')
    .js('resources/assets/js/welcome.js', 'public/js');


