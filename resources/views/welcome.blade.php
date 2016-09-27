<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel + React Demo</title>

        <link rel="stylesheet" href="css/app.css">
        <!-- Github buttons. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <h1>Laravel + React with BrowserSync, HMR and React hot loading</h1>
                <p>This is a demo app showcasing the use of Laravel Elixir extension : <a href="https://www.npmjs.com/package/laravel-elixir-react-hmr">laravel-elixir-react-hmr</a></p>
            </div>
        </div>
        <div class="flex-center">
            <div id="app"></div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <p style="margin-bottom: 5px">If you liked this Larave Elixir extension, give us a star.</p>
                        <div>
                            <a class="github-button" href="https://github.com/eumentis/laravel-elixir-react-hmr" data-count-href="/eumentis/laravel-elixir-react-hmr/stargazers" data-count-api="/repos/eumentis/laravel-elixir-react-hmr#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star eumentis/laravel-elixir-react-hmr on GitHub">Star</a>
                            {{--<a class="github-button" href="https://github.com/eumentis/laravel-elixir-react-hmr-demo" data-count-href="/eumentis/laravel-elixir-react-hmr-demo/stargazers" data-count-api="/repos/eumentis/laravel-elixir-react-hmr-demo#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star eumentis/laravel-elixir-react-hmr-demo on GitHub">Star - demo</a>--}}
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-4">
                        <p style="margin-top: 20px">Developed by <a href="http://cloud.eumentis.com">Eumentis Cloud</a></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/app.js"></script>
    </body>
</html>
