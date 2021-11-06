<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        //        TODO:
//         this line added View::share for share post title to all views. saeed doc
//         this line must be commented when run php artisan migrate ????  saeed doc
//         umm!!! also this is not pass tests !!!
//         View::share('posts', Post::orderBy('created_at', 'asc')->get());

        // Option 2

        View::composer(['other.about', 'blog.post', 'blog.post.like', 'admin.index', 'admin.create', 'admin.edit', 'admin.delete',
            'admin.update', 'auth.signin'], function ($view) {
            $view->with('posts', Post::orderBy('created_at', 'asc')->get());
        });
    }
}
