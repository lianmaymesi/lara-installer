<?php

namespace Lianmaymesi\LaraInstaller\Tests\Feature;

use Illuminate\Routing\Route;
use Lianmaymesi\LaraInstaller\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeControllerTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    function test_it_views_install_page()
    {
        $this->get(route('li.index'))
            ->assertOk();
    }
}
