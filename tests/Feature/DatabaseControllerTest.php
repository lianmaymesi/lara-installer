<?php

namespace Lianmaymesi\LaraInstaller\Tests\Feature;

use Lianmaymesi\LaraInstaller\Tests\TestCase;

class DatabaseControllerTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function test_it_views_database_page()
    {
        $this->get(route('li.database'))
            ->assertOk();
    }
}
