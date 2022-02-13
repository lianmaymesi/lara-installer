<?php

namespace Lianmaymesi\LaraInstaller\Tests;

use Lianmaymesi\LaraInstaller\LaraInstallerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaraInstallerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // config()->set('database.default', 'testing');

        // include_once __DIR__ . './../database/migrations/create_users_table.php.stub';

        // (new \CreateUsersTable)->up();
    }
}
