<?php

namespace Delgont\Anume;

use Illuminate\Support\ServiceProvider;

use Delgont\Anume\Concerns\RegistersCommands;
use Delgont\Anume\Concerns\BootObservers;
use Delgont\Anume\Concerns\RegistersPublishables;

use Delgont\Anume\Concerns\BootWebComposers;


class AnumeServiceProvider extends ServiceProvider
{
    use RegistersCommands, RegistersPublishables, BootObservers, BootWebComposers;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'anume');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->registerPublishables();
            $this->registerCommands();
        }

        //View Composers
        $this->bootWebComposers();
    }

  
}
