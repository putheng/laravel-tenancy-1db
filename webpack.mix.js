const mix = require('laravel-mix');
require('laravel-mix-alias');

mix.alias({
    '@': '/resources/js',
    '~': '/resources/sass',
    '@middleware': '/resources/js/router/middleware',
});

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
