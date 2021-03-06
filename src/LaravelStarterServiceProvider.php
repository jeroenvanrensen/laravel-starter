<?php

namespace JeroenvanRensen\LaravelStarter;

use Illuminate\Support\ServiceProvider;
use JeroenvanRensen\LaravelStarter\Console\InstallCommand;

class LaravelStarterServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            InstallCommand::class
        ]);
    }
}