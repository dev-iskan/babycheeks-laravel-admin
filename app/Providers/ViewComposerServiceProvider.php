<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Filters\Product\ProductFilters;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['layouts.partials._header', 'layouts.partials._footer'], function ($view) {
            $categories = Category::type('parent')->finished()->with('children')->get();
            $view->with(compact('categories'));
        });

        View::composer('pages.partials._filters', function ($view) {
          $mappings = ProductFilters::mapping();
          $view->with(compact('mappings'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
