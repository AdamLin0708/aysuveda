var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('web.scss');

    mix.styles([
        'public/css/font-awesome.min.css',
        'public/css/bootstrap.css',
        'public/css/web.css'
    ], 'public/css/app.css', './') ;
});

