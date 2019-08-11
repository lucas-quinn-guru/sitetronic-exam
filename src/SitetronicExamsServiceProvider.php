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
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sitetronic-exam.php',
            'sitetronic-exam'
        );

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

        $this->app['router']
            ->aliasMiddleware('isAdmin', \LucasQuinnGuru\SitetronicExam\Middleware\AdminMiddleware::class);
        $this->app['router']
            ->aliasMiddleware('clearance', \LucasQuinnGuru\SitetronicExam\Middleware\ClearanceMiddleware::class);


        $this->publishes([
            __DIR__ . '/../config/sitetronic-exam.php' => config_path('sitetronic-exam.php'),
        ], 'sitetronic-exam-config');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/lucas-quinn-guru/sitetronic-exam'),
        ], 'assets');
    }
}
