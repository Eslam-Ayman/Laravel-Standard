<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /*-------------*/
        // Set up global user object for All views not specific one
        /*
            view()->share('varName', 'value');
            use View;
            View::share('varName', 'value');
        */

        /*-------------*/
        // if there is the only one blade we had to shate in, i think it will honstly be fine to be here in this function
        // but if there are more than one shared variable and there are many blades you want to specific variables to every one 
        // then you must create your own service provider " php artisan make:provider ViewComposerServiceProvider " & type it in config app.providor

        /*view()->composer('inc.nav', function($view){
            $view->with('varName', 'xxxx');
        }); */

        // second Argument either i could refrence a class here because in many times  you wanna dedicated object to handel that process 
        // or you could use the Anonymous (closure) fun here
        // view()->composer('inc.nav', 'ClassName');
        // view()->composer('inc/nav', 'ClassName');
        // view()->composer('*', 'ClassName'); // to make it for all blades gloupl
        // you can use calss instead of gloupl function
        // View::composer('*', 'ClassName'); 

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
