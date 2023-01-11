<?php

namespace Maldicore\Stubs;

use Illuminate\Support\ServiceProvider;

class StubsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StubsPublishCommand::class,
            ]);
        }
    }
}
