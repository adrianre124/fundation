<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('aktualnosci', Post::whereHas('category', function($q) {
            $q->where('name','like', 'Aktualnosci');
        })->orderBy('created_at', 'desc')->limit(3)->get());
    }
}
