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
        'material.indigo-pink.min.css',
        'material-icons.css',
        'font-awesome.min.css',
        'bootstrap.min.css',
        'prism.css',
        'lato.css',
        'site-style.css'
    ]);
    
    mix.scripts([
        'material.min.js',
        'jquery.min.js',
        'bootstrap.min.js',
        'prism.js',
        'typed.js',
        'scripts.js'
    ]);
    
});

