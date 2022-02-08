<?php

namespace Lianmaymesi\LaraInstaller\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lianmaymesi\LaraInstaller\LaraInstallerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lianmaymesi\\LaraInstaller\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaraInstallerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_lara-installer_table.php.stub';
        $migration->up();
        */
    }
}
