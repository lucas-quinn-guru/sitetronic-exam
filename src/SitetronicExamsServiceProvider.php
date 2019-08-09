<?php

namespace LucasQuinnGuru\SitetronicExams;

use Illuminate\Support\ServiceProvider;

class SitetronicExamsServiceProvider extends ServiceProvider
{

    protected $commands = [
        'LucasQuinnGuru\SitetronicExams\Commands\SeedRolesAndPermissionsCommand'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sitetronic_exams.php',
            'sitetronic-exams'
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
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitetronic-exams');

        $this->app['router']
            ->aliasMiddleware('isAdmin', \LucasQuinnGuru\SitetronicExams\Middleware\AdminMiddleware::class);
        $this->app['router']
            ->aliasMiddleware('clearance', \LucasQuinnGuru\SitetronicExams\Middleware\ClearanceMiddleware::class);


        $this->publishes([
            __DIR__ . '/../config/sitetronic-exams.php' => config_path('sitetronic-exams.php'),
        ], 'sitetronic-exams-config');

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/lucas-quinn-guru/sitetronic-exams'),
        ], 'assets');
    }
}
