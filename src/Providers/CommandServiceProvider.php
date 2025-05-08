<?php

namespace Hanafalah\ModuleTax\Providers;

use Illuminate\Support\ServiceProvider;
use Hanafalah\ModuleTax\Commands;

class CommandServiceProvider extends ServiceProvider
{
    protected $__commands = [
        Commands\MigrateCommand::class,
        Commands\SeedCommand::class,
        Commands\InstallMakeCommand::class
    ];

    /**
     * Register the command.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(config('module-tax.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
