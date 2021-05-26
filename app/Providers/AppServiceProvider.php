<?php

namespace App\Providers;

use App\Barangay;
use App\Resident;
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
        view()->composer('*', function ($view) {
            // $resident = Resident::where('id','=',1)->with('relatives')->first();
            // dd($resident);
            $view->with('barangays', Barangay::get());
            $view->with('residents', Resident::all());
        });
    }
}
