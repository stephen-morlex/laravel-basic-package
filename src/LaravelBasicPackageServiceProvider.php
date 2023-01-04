<?php

namespace Stephenmorlex\LaravelBasicPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Stephenmorlex\LaravelBasicPackage\Commands\LaravelBasicPackageCommand;

class LaravelBasicPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-basic-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-basic-package_table')
            ->hasCommand(LaravelBasicPackageCommand::class);
    }
}
