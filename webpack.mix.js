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

mix

.styles(['resources/css/bootstrap.min.css'], 'public/dist/css/bootstrap.min.css')
.styles(['resources/css/app.css'], 'public/dist/css/app.css')
// ----------------------------------------------------------------------------
.scripts(['resources/js/bootstrap.bundle.min.js'], 'public/dist/js/bootstrap.bundle.min.js')
.scripts(['resources/js/app.js'], 'public/dist/js/app.js')
