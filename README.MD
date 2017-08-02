## RLogger

#### What is RLogger?
RLogger is a simple package to save exceptions thrown by laravel applications and show them in a more readable form.


### How to use it?

#### 1- Dependency
You just need to require the composer package:

```shell
composer require rajinha92/rlogger
```

#### 2 - ServiceProvider
Next you need to add the **ServiceProvider** in your `config/app.php` file.

> `config/app.php`

```php
    'providers' => [
        // ...
        \RLogger\Providers\RLoggerServiceProvider::class,
    ],
```

#### 3 - Publishing files

Publish config and view files by typing in your terminal

```shell
php artisan vendor:publish
```
or
```shell
php artisan vendor:publish --provider="RLogger\Providers\RLoggerServiceProvider"
```

#### 4 - Running migrations

This package has a migration file, that create the **rlogger** table, so you have to run the command:

```shell
php artisan migrate
```

#### 5 - Error Handler

Last but not least, change your `app\Exceptions\Handler.php`

```php
use RLogger\Traits\RLoggerReport;
...
use RLoggerReport;
...
//your report method should look like this
public function report(Exception $exception)
{
    $this->rlog($exception);
}
```
The `rlog` method will respect the `shouldReport($exception)` contained in the class.

#### 6 - config

The rlogger route is under a basic authentication, so, you have to add the authorized users's id

```php
return [
    'rlogger_authorized_user_id' => env('RLOGGER_AUTHORIZED_USER_ID', 1), //here goes the id, can be an array too
    'rlogger_laravel_report' => env('RLOGGER_LARAVEL_REPORT', false), //change to true if you want to automatically call parent::report($exception)
];
```

#### 7 - Where are my logs?
Now all the exceptions will be available under the url `/rlogger`



