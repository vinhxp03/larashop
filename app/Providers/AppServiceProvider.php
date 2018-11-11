<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header', function ($view){
            $product_type = ProductType::all();
            $view->with('loai_sp', $product_type);
        });
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
