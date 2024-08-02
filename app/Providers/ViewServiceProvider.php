<?php

namespace App\Providers;

use App\Models\Child;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Share data with all views, handling authenticated and non-authenticated cases
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $children = Child::where('user_id', auth()->id())->get();
                $view->with('children', $children);
            }
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // No services to register
    }
}
