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

mix.scripts(['resources/js/assets/jquery.min.js'], 'public/js/assets/jquery.js').version();
mix.scripts(['resources/js/assets/login.js'], 'public/js/assets/login.js').version();
mix.scripts(['resources/css/login.css'], 'public/css/assets/login.css').version();
