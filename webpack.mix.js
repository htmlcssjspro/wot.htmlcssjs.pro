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

mix.js('resources/assets/js/app.js', 'js')
    .js('resources/assets/js/main.js', 'js');

mix.postCss('resources/assets/css/app.css', 'css', [
    //
]);

mix.sass('resources/assets/scss/test.scss', 'css', [
    //
]);

mix.sourceMaps();
mix.version();

// if (mix.inProduction()) {
//     mix.version();
// }
