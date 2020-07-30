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

mix.styles(['resources/views/Doe/css/style.css'],'public/Doe/css/style.css')
	.scripts(['resources/views/Doe/js/script.js'],'public/Doe/js/script.js')
	.copy(['resources/assets/images/logo.png'], 'public/assets/images/logo.png')
	.version();