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

elixir.config.publicDir = '../../public';
elixir.config.cssOutput = 'assets/css';
elixir.config.jsOutput = 'assets/js';

elixir(function(mix) {
    mix.less('app.less');
    mix.scripts([
        'assets/vendor/jquery/dist/jquery.js',
        'assets/vendor/bootstrap/dist/js/bootstrap.js',
        'assets/js/application.js'
    ], null, 'resources');
    mix.copy('resources/assets/vendor/font-awesome/fonts', 'assets/fonts');
    mix.copy('resources/assets/vendor/bootstrap/fonts', 'assets/fonts');
});
