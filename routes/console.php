<?php

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

$this->command('ide-helper:run', function () {
    if (!App::getProvider(IdeHelperServiceProvider::class)) {
        $this->info(sprintf('Skipped. IdeHelper not registered for %s environment.', App::environment()));
        return;
    }
    $this->call('ide-helper:generate');
    $this->call('ide-helper:meta');
});
