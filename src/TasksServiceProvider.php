<?php

namespace Vendor\TasksApi;

use Illuminate\Support\ServiceProvider;
use Vendor\TasksApi\Console\InstallApiCommand;

class TasksServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the command
        $this->commands([
            InstallApiCommand::class,
        ]);
    }

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        // Publishes migrations
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations'),
        ], 'migrations');

        // Publishes seeders
        $this->publishes([
            __DIR__.'/database/seeders/' => database_path('seeders'),
        ], 'seeders');
    }
}
