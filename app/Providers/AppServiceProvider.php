<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Tracking;

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
        $ip = \Request::ip();
        $page = '/'. \Request::segment(1);
        Tracking::create([
            'ip_address'=>$ip,
            'page'=>$page
        ]);
    }
}
