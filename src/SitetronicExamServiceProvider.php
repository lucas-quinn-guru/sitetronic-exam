<?php

namespace LucasQuinnGuru\SitetronicExam;

use Illuminate\Support\ServiceProvider;

class SitetronicExamServiceProvider extends ServiceProvider
{

    protected $commands = [
        'LucasQuinnGuru\SitetronicExam\Commands\SeedRolesAndPermissionsCommand'
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
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitetronic-exam');


    }
}
