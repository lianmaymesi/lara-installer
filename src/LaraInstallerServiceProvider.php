<?php

namespace Lianmaymesi\LaraInstaller;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lianmaymesi\LaraInstaller\Http\Middleware\Installer;
use Lianmaymesi\LaraInstaller\Http\Middleware\CheckInstall;

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
            ->hasRoute('lara-installer')
            ->hasTranslations();
        // ->hasMigration('create_lara-installer_table')
        // ->hasCommand(LaraInstallerCommand::class);
    }

    public function bootingPackage()
    {
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('lara-installer', Installer::class);

        $router->aliasMiddleware('check-install', CheckInstall::class);

        Blade::directive('listyles', function () {
            return '<style>' . file_get_contents(__DIR__ . './../resources/dist/css/app.css') . '</style>';
        });
    }
}
