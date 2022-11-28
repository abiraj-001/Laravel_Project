<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\amazon\Categorymodel;
use Illuminate\Support\ServiceProvider;
use App\Models\amazon\amazon_product;

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
        //

        // $category = Categorymodel::all();
        // $category = amazon_product::all();
        // $category_products = amazon_product::all();
        
        // view::share('$category_products', $category_products);

        // view::share('$category', $category);

    }
}
