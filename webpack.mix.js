const mix = require('laravel-mix');
const path = require('path');

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

mix.disableNotifications();
// mix.disableSuccessNotifications();

mix.alias({
    '$': path.join(__dirname, 'resources/assets/js'),
    '@': path.join(__dirname, 'resources/assets/scss'),
});

mix.webpackConfig({
    target: ['web', 'es6']
});

mix.js('resources/assets/js/app.js', 'js');

mix.sass('resources/assets/scss/app.scss', 'css', []);

// mix.postCss('resources/assets/css/app-pure.css', 'css', []);

mix.sourceMaps();
mix.version();

// mix.dump();


// breeze
// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
