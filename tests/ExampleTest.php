<?php

namespace Appkit\:package_name_cap\Tests;

use Orchestra\Testbench\TestCase;
use Appkit\:package_name_cap\:package_name_capServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [:package_name_capServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
