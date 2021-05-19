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

 mix.scripts([
    'resources/js/connection.js',
    'resources/js/realestate.js',
    'resources/js/mobileContent.js',
    'resources/js/app.js'
], 'public/js/all.js')
    .styles([
    'resources/css/yad2.css',
    'resources/css/app.css',
    'resources/css/add_post.css',
    'resources/css/publish.css',
    'resources/css/mobile_content.css',
    'resources/css/connection.css'
], 'public/css/all.css');
