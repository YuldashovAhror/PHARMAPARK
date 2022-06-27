<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
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
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if(session()->get('locale') == ''){session()->put('locale', 'ru');app()->setLocale('ru');}
        else{app()->setLocale(session()->get('locale'));}
        view()->composer('*', function ($view)
        {
            $lang = session()->get('locale');
            $n = 'name_'.$lang;
            $p = 'position_'.$lang;
            $d = 'description_'.$lang;
            $view->with([
                'n'=>$n,
                'd'=>$d,
                'p'=>$p,
                'lang'=>$lang,
            ]);
        });
    }
}
