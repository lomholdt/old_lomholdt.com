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
    mix.sass('app.scss')
    .styles(['shCore.css', 'shThemeDefault.css'], 'public/css/syntax.css')
    .scripts(['syntax/shCore.js', 
    		  'syntax/brushes/shBrushJava.js',
    		  'syntax/brushes/shBrushScala.js'], 'public/js/syntax.js')
    .scripts(['vue.min.js'])
    .version(['public/css/app.css','public/css/syntax.css','public/js/syntax.js','public/js/all.js'])
});
