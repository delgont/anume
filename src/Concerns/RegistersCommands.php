<?php

namespace Delgont\Anume\Concerns;

/**
 * Commands
 */
use Delgont\Anume\Console\Commands\InstallCommand;
use Delgont\Anume\Console\Commands\PublishPublishablesCommand;
use Delgont\Anume\Console\Commands\GenerateLinks;

trait RegistersCommands
{
    private function registerCommands() : void
    {
        $this->commands([
            InstallCommand::class,
            PublishPublishablesCommand::class,
            GenerateLinks::class
        ]);
    }
}