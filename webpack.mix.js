const mix = require('laravel-mix');

let tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
// .sass('resources/sass/tailwind.sass', 'public/css')
// .options({
//     processCssUrls: false,
//     postCss: [tailwindcss('./tailwind.js')],
// });
