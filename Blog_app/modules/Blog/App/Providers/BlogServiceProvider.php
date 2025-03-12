<?php

namespace Modules\Blog\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Load the module routes
        $this->loadRoutesFrom(__DIR__ . '/../../Routes/web.php');

        // Load the module views and assign a namespace
        $this->loadViewsFrom(__DIR__ . '/../../Resources/views', 'Blog');

        // Load the module migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../Database/Migrations');

        // Publier les assets si nécessaire
        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('views/vendor/Blog'),
        ], 'Blog-views');
        // Manually register the factory path
        // Factory::guessFactoryNamesUsing(function (string $modelName) {
        //     $modelName = str_replace('Modules\Blog\App\Models', 'Modules\Blog\Database\Factories', $modelName);
        //     return $modelName . 'Factory';
        // });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        // Optionally, merge module-specific configuration or register bindings
    }
}
