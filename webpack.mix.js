const { vue } = require('laravel-mix');
let mix = require('laravel-mix');

mix.version();

mix.js('resources/js/app.js', 'public/js/app.js').vue();