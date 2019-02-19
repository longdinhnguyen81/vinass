<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cat;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categorys = Cat::where('parent_id',0)->get();
        $parent_cats = Cat::where('parent_id', '!=', 0)->get();
        view()->share('categorys', $categorys);
        view()->share('parent_cats', $parent_cats);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
