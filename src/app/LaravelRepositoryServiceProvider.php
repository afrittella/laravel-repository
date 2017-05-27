<?php
namespace Afrittella\LaravelRepository;

use Illuminate\Support\ServiceProvider;

class LaravelRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', 'laravel-repository'
        );

        // publish config file
        $this->publishes([__DIR__ . '/../config/config.php' => config_path() . '/laravel-repository.php'], 'config');
    }

    public function register()
    {

    }

    public function provides()
    {
        return [];
    }
}