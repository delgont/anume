<?php

namespace Delgont\Anume\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'anume:install
                            {--fresh : Fresh Installation Of Anume Plugin}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private $fresh = false;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Installing and configuring anume plugin ....');

        //Publish publishables
        $this->publishPublishables();
       
    }

    private function publishPublishables() : void 
    {
        $fresh = ($this->option('fresh')) ? true : false;

        $this->info(' ');
        $this->info('Publishing Publishables');
        $this->call('vendor:publish', ['--tag' => 'anume-web-config', '--force' => $fresh]);
        $this->call('vendor:publish', ['--tag' => 'anume-data-config', '--force' => $fresh]);
        $this->call('vendor:publish', ['--tag' => 'anume-assets', '--force' => $fresh]);

        //Sychronising Templates
        $this->call('template:sync');
    }
    
}
