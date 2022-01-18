<?php

namespace Concepticio\Nhelper;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class NhelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Concepticio\Nhelper\Controllers\help_moduleController');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'nhelper');
        $this->mergeConfigFrom(__DIR__.'/config.php', 'nhelper');
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // les routes web
        include __DIR__.'/routes/web.php';

   
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'nhelper');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'nhelper');

        //publication pour faciliter la modification par l'utilisateur
        // $this->publishes([
        //     __DIR__.'/../config.php' => config_path('nhelper.php'),
        // ]);


        $configPath = __DIR__ . '/config.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('nhelper.php');
        } else {
            $publishPath = base_path('config/nhelper.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');


        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/nhelper'),
        // ]);
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/nhelper'),
        ]);
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/nhelper'),
        ], 'public');
    }
}
