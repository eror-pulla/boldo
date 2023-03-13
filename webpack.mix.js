const mix = require('laravel-mix');

mix.js('src/assets/js/app.js', 'dist/js')
   .sass('src/assets/scss/app.scss', 'dist/css');

mix.options({
   processCssUrls: false,
});