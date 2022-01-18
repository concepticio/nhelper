<?php

namespace Concepticio\Nhelp;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class NhelpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Concepticio\Nhelp\Controllers\help_moduleController');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'nhelp');
        $this->mergeConfigFrom(__DIR__.'/config.php', 'nhelp');
        
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
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'nhelp');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'nhelp');

        //publication pour faciliter la modification par l'utilisateur
        // $this->publishes([
        //     __DIR__.'/../config.php' => config_path('nhelp.php'),
        // ]);


        $configPath = __DIR__ . '/config.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('nhelp.php');
        } else {
            $publishPath = base_path('config/nhelp.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');


        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/nhelp'),
        // ]);
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/nhelp'),
        ]);
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/nhelp'),
        ], 'public');
    }
}
