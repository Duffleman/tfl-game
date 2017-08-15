<?php

namespace App\Providers;

use App\Services\TFLAPI;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\TFLAPI', function () {
            $appId = config('tfl.app_id');
            $appKey = config('tfl.app_key');

            return new TFLAPI($appId, $appKey);
        });
    }
}
