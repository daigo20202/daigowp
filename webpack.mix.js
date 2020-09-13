let mix = require('laravel-mix');

mix
    .sass('src/sass/styles.scss', './style.css')
    .options({
        processCssUrls: false
    });
