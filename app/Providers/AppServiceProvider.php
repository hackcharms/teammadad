<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use Exception;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            view()->share('recent_blogs', Blog::latest()->take(3)->get());
        } catch(Exception $e) {
            info($e);
        }
    }
}
