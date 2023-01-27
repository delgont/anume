<?php

namespace Delgont\Anume\Console\Commands;

use Illuminate\Console\Command;

class GenerateLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'anume:links
                            {--fresh : Force generate links}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates anume links';

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
        $this->info('Generate Links .');

    }

}
