## Laravel Monolog MySQL Handler.

MySQL driver for Laravel Monolog.

### Installation

- [Packagist](https://packagist.org/packages/pedrofornaza/monolog-mysql)
- [GitHub](https://github.com/pedrofornaza/monolog-mysql)

To get the lastest version of Theme simply require it in your `composer.json` file.

~~~
"pedrofornaza/monolog-mysql": "v0.1"
~~~

You'll then need to run `composer install` to download it and have the autoloader updated.

Open up `config/app.php` and find the `providers` key.

~~~
'providers' => array(
    // ...
    'Fornaza\Laravel\Provider\MonologMysqlHandlerServiceProvider'
);
~~~

Publish config using artisan CLI.

~~~
php artisan config:publish pedrofornaza/monolog-mysql
~~~

Migrate tables.

~~~
php artisan migrate
~~~

## Usage

~~~php
Log::getMonolog()->pushHandler(new Fornaza\Monolog\Handler\MysqlHandler());
~~~

Or in `bootstrap/app.php`:

~~~php
$app->configureMonologUsing(function($monolog) use($app) {
    $monolog->pushHandler(new Fornaza\Monolog\Handler\MysqlHandler());
});
~~~

## Credits

Based on:

- [MonoSQL](https://github.com/teepluss/laravel4-monosql)
