<?php

namespace App\Providers;

use View;
use App\Models\Continent;
use App\Models\LanguageGroup;
use App\Models\Language;
use App\Models\Country;
use App\Http\Controllers\ContinentsController;
use App\Http\Controllers\LanguageGroupsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\CountriesController;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        

        View::composer('*', function($view){
            $data =  Continent::orderBy('updated_at', 'DESC')->get(); //eg User::all();
            $view->with('continents', $data); // 'data' is value to be used in views 'data' = $data
            $data =  LanguageGroup::orderBy('updated_at', 'DESC')->get(); //eg User::all();
            $view->with('langGroups', $data); // 'data' is value to be used in views 'data' = $data
            $data =  Language::orderBy('updated_at', 'DESC')->get(); //eg User::all();
            $view->with('allLanguages', $data); // 'data' is value to be used in views 'data' = $data
            $data =  Country::orderBy('updated_at', 'DESC')->get(); //eg User::all();
            $view->with('allCountries', $data); // 'data' is value to be used in views 'data' = $data
            
        });
    }
}
