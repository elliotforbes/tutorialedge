var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.less('admin-new.less'); 
    
    mix.styles([
        'font-awesome.min.css',
        'bootstrap.min.css',
        'prism.css',
        'front-end.css',
        'menu.css',
        'lato.css'
    ]);
    
});

