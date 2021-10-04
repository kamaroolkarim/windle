<?php

namespace Kamaroolkarim\Windle;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kamaroolkarim\Windle\Commands\WindleCommand;

class WindleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('windle')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_windle_table')
            ->hasCommand(WindleCommand::class);
    }
}
