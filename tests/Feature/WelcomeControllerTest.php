<?php

namespace Lianmaymesi\LaraInstaller\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Lianmaymesi\LaraInstaller\Tests\TestCase;

class WelcomeControllerTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function test_it_views_install_page()
    {
        $this->get(route('li.index'))
            ->assertOk();
    }
}
