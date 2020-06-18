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
    .js('resources/js/main.js', 'public/js')
    .js('resources/js/plugins.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy(
        'resources/css/style.css',
        'public/css');
mix.copy('resources/css/style-pricing-table.css',
            'public/css');
mix.copy('resources/css/style-teachers-table.css',
                'public/css');
