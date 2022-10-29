<?php

namespace App\Providers;

use App\Models\Categories;
use App\Models\CmsPage;
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
        View::composer('*',function($view){

             $product_categories =  Categories::where('is_active',1)->where('parent_id',null)->orderBy('order')->get();
            $view->with([ 'product_categories' => $product_categories  ]);

        });
    }
}
