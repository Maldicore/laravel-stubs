<?php

namespace Maldicore\Stubs\Tests;

use Maldicore\Stubs\StubsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
