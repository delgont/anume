<?php

namespace Delgont\Anume\Concerns;


trait RegistersPublishables
{
    private function registerPublishables() : void
    {
        //Web configuration
        $this->publishes([
            __DIR__.'/../../config/web.php' => config_path('web.php')
        ], 'anume-web-config');

        //Data configuration
        $this->publishes([
            __DIR__.'/../../config/data.php' => config_path('data.php')
        ], 'anume-data-config');

        $this->publishes([
            __DIR__.'/../../assets' => public_path(),
          ], 'anume-assets');

    }
}