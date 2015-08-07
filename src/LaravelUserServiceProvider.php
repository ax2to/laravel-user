<?php
namespace Ax2to\LaravelUser;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelUserServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        $this->loadViewsFrom(__DIR__ . '/../resources/views/', 'laravel-user');

        $this->publishes([
            __DIR__ . '/../resources/views/' => base_path('resources/views/vendor/laravel-user'),
        ]);

        // use this if your package has routes
        $this->setupRoutes($this->app->router);

        // use this if your has migrations
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        // use this if your has assets
        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/laravel-user'),
        ], 'public');


        // use this if your package needs a config file
        // $this->publishes([
        //         __DIR__.'/config/config.php' => config_path('laravel-user.php'),
        // ]);

        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'laravel-user'
        // );
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        // routes
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        // middleware
        $router->middleware('guest_user', 'Ax2to\LaravelUser\Http\Middleware\RedirectIfAuthenticated');
        $router->middleware('auth_user', 'Ax2to\LaravelUser\Http\Middleware\Authenticate');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLaravelUser();

        // use this if your package has a config file
        // config([
        //         'config/laravel-user.php',
        // ]);
    }

    private function registerLaravelUser()
    {
        $this->app->bind('laravel-user', function ($app) {
            return new LaravelUser($app);
        });
    }
}