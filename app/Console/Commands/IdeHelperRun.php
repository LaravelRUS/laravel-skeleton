<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class IdeHelperRun extends Command
{
    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $laravel;

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
        if (! $this->laravel->getProvider(IdeHelperServiceProvider::class)) {
            $this->info(sprintf(
                'Skipped. IdeHelper not registered for %s environment.',
                $this->laravel->environment()
            ));

            return;
        }

        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
}
