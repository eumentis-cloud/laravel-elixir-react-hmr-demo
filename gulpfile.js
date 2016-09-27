const elixir = require('laravel-elixir');

require('laravel-elixir-react-hmr');

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

elixir(mix => {
    mix.sass('app.scss')
       .react({
           proxy: "test.app",   // Laravel dev server URL
           inputFiles: [
               './app.js'   // Path relative to '/resources/assets/js'
           ]
       });
});
