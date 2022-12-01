<?php

namespace App\Providers;

use App\Models\Categorie;
use Illuminate\Pagination\Paginator;
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
        View::composer(['*'], function ($view) {
            $view->with('globalCategories', Categorie::all());
        });
        Paginator::useBootstrapFive();
        \Carbon\Carbon::setLocale('fr');
    }
}
