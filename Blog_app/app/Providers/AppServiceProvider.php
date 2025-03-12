<?php

namespace App\Providers;

use App\Models\Article;
use App\Policies\ArticlePolicy;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Modules\Blog\app\Providers\BlogServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(BlogServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if(Session::has('locale')){
            App::setLocale(Session::get('locale'));
        }
        Paginator::useBootstrap();
    }
    protected $policies =[
        Article::class => ArticlePolicy::class,
    ];
}
