<?php

namespace Delgont\Anume\Console\Commands;

use Illuminate\Console\Command;

class PublishPublishablesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'anume:publish 
    {--views : Publish Views}
    {--configs : Publish configuration files}
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
        $fresh = ($this->option('fresh')) ? true : false;

        if ($this->option('views')) {
            $this->call('vendor:publish', ['--tag' => 'anume-web-views', '--force' => $fresh]);
        }
        
    }

    
}
