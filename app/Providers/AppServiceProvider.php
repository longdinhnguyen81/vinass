<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cat;
use App\News;

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

        $randoms = News::orderBy(\DB::raw('RAND()'))->limit(5)->get();
        $fiveNews = News::orderBy('id', 'desc')->limit(5)->get();
        view()->share('randoms', $randoms);
        view()->share('fiveNews', $fiveNews);
        
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
