<?php

namespace App\Console\Commands;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Console\Command;

class IdeHelperRun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a IDE Helper files if current environment is local.';

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
        if (!\App::getProvider(IdeHelperServiceProvider::class)) {
            $this->info(sprintf('Skipped. IdeHelper not registered for %s environment.', \App::environment()));
            return;
        }
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
}
