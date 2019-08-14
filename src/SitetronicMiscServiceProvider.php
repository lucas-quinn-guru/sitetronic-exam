<?php

namespace LucasQuinnGuru\SitetronicMisc;

use Illuminate\Support\ServiceProvider;

class SitetronicMiscServiceProvider extends ServiceProvider
{

    protected $commands = [
        'LucasQuinnGuru\SitetronicMisc\Commands\SeedSectionsCommand'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {



    }
}
