 /*PHP/Laravel 11 課題６ 【応用】 webpack.mix.jsを編集して、profile.scss をコンパイルするように編集してみましょう*/

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

 mix.js('resources/js/app.js', 'public/js')
 .sass('resources/sass/app.scss', 'public/css')
 .sass('resources/sass/profile.scss', 'public/css')
 .sourceMaps();
