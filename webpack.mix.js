const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader');

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.webpackConfig({
    plugins: [
        new VueLoaderPlugin()
    ],
    resolve: {
        alias: {
            '@': '/resources/js'
        }
    }
}); 