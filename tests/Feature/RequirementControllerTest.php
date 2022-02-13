<?php

namespace Lianmaymesi\LaraInstaller\Tests\Feature;

use Lianmaymesi\LaraInstaller\Tests\TestCase;

class RequirementControllerTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function test_it_views_requirement_page()
    {
        $this->get(route('li.requirement'))
            ->assertOk();
    }
}
