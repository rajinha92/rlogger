<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 20/07/17
 * Time: 19:45
 */

namespace RLogger\Providers;


use Illuminate\Support\ServiceProvider;

class RLoggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $this->loadViewsFrom(__DIR__ . '/views', 'rlogger');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/rlogger'),
        ]);

        $this->publishes([
            __DIR__ . '/config/rlogger.php' => config_path('rlogger.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/rlogger.php', 'rlogger'
        );
    }
}