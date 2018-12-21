<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeLangPath();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Compose the navigation bar
     */
    public function composeLangPath()
    {
        // if you refrence a class, it will call compose method automatic even if you didn't triger it here but if you need to use other methon you can trger it's name here 
        // view()->composer('inc.nav','App\Http\ViewComposers\TestViewComposer@compose'); // if you delete compose it will run perfectly
        // view()->composer('inc.nav','App\Http\ViewComposers\TestViewComposer@funcName'); // if you need to use another function
        // view()->composer('inc.nav','App\Http\ViewComposers\TestViewComposer'); // here you must create directory called ViewComposers under Http directory & then file called TestViewComposer with function 'compose' in this class
        
        view()->composer('inc.nav', function($view){
            $view->with('langNav', 'inc/nav.');
        });

        view()->composer('auth.login', function($view){
            $view->with('langLogin', 'auth/login.');
        });

        view()->composer('auth.register', function($view){
            $view->with('langRegister', 'auth/register.');
        });
        
    }
}
