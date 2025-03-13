let mix = require('laravel-mix');

mix.browserSync({
    proxy: '127.0.0.1:8000', // Change this to match your Laravel local URL
    files: [
        'resources/views/**/*.blade.php',
        'public/css/**/*.css',
        'public/js/**/*.js'
    ]
});
