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
mix.babelConfig({
    ignore: [ path.join(__dirname, 'resources/assets') ]
});

// mix.options({});

// mix.override(webpackConfig => {

//     // webpackConfig.module.rules[4] = {};
//     console.log('webpackConfig: ', webpackConfig);
//     console.log('webpackConfig.plugins: ', webpackConfig.plugins);

//     console.log('webpackConfig.module.rules: ', webpackConfig.module.rules);

//     console.log('webpackConfig.module.rules[4].use[0]: ', webpackConfig.module.rules[4].use[0]);
//     // console.log('webpackConfig.module.rules[4].use[0].options.presets: ', webpackConfig.module.rules[4].use[0].options.presets);
//     // console.log('webpackConfig.module.rules[4].use[0].options.plugins: ', webpackConfig.module.rules[4].use[0].options.plugins);
// });

mix.js('resources/assets/js/app.js', 'js');

// mix.postCss('resources/assets/css/app-pure.css', 'css', []);

mix.sass('resources/assets/scss/app.scss', 'css', []);

mix.sourceMaps();
mix.version();

mix.dump();
