<?php

namespace RaviyaTechnical\ActionGenerator;

use Illuminate\Support\ServiceProvider;
use RaviyaTechnical\ActionGenerator\Console\MakeAction;

class ActionGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([MakeAction::class]);
        }
    }
}
