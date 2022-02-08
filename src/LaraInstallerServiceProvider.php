<?php

namespace Lianmaymesi\LaraInstaller;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lianmaymesi\LaraInstaller\Commands\LaraInstallerCommand;

class LaraInstallerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lara-installer')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('lara-installer');
        // ->hasMigration('create_lara-installer_table')
        // ->hasCommand(LaraInstallerCommand::class);
    }
}
