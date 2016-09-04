<?php

namespace App\Console\Commands;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

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
     * Execute the console command.
     */
    public function handle()
    {
        if (!App::getProvider(IdeHelperServiceProvider::class)) {
            $this->info(sprintf('Skipped. IdeHelper not registered for %s environment.', App::environment()));
            return;
        }
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
}
