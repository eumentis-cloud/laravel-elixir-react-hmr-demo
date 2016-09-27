# laravel-elixir-react-hmr-demo
A demo app based on our Laravel Elixir extension : [laravel-elixir-react-hmr](https://github.com/pawaniitd/laravel-elixir-react-hmr)

## Usage
### Install
```sh
git clone https://github.com/eumentis/laravel-elixir-react-hmr-demo.git

composer install

npm install

cp .env.example .env

php artisan key:generate
```
Change the `proxy` option in 'gulpfile.js' to your Laravel dev server URL
### Run
```sh
gulp watch
```
Open `http://localhost:3000` in your browser. *Live reloading does not work in IE*
