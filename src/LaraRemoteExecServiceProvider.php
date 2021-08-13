<?php

namespace Taha7\LaraRemoteExec;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Taha7\LaraRemoteExec\Commands\LaraRemoteExecCommand;

class LaraRemoteExecServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-remote-exec')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara-remote-exec_table')
            ->hasCommand(LaraRemoteExecCommand::class);
    }
}
