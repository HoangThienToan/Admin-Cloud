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
    .sass('resources/sass/app.scss', 'public/css')
    // .scripts([
    //     'node_modules/jquery/dist/jquery.js',
    //     'node_modules/datatables.net-dt/js/dataTables.dataTables.min.js',
    // ], 'public/js/datatables.min.js')
    // .styles([
    //     'node_modules/datatables.net-dt/css/dataTables.dataTables.min.css',
    // ], 'public/css/datatables.min.css')
    .sourceMaps();
