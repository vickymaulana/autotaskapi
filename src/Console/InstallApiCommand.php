<?php

namespace Vendor\TasksApi\Console;

use Illuminate\Console\Command;

class InstallApiCommand extends Command
{
    protected $signature = 'install:api';

    protected $description = 'Install the Tasks API';

    public function handle()
    {
        $this->info('Publishing migrations...');
        $this->call('vendor:publish', [
            '--provider' => 'Vendor\\TasksApi\\TasksServiceProvider',
            '--tag' => 'migrations',
        ]);

        $this->info('Publishing seeders...');
        $this->call('vendor:publish', [
            '--provider' => 'Vendor\\TasksApi\\TasksServiceProvider',
            '--tag' => 'seeders',
        ]);

        $this->info('Running migrations...');
        $this->call('migrate');

        $this->info('Tasks API installed successfully.');
    }
}
