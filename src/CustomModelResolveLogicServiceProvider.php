<?php

namespace J1610\CustomModelResolveLogic;

use Illuminate\Support\ServiceProvider;

class CustomModelResolveLogicServiceProvider extends ServiceProvider
{
    public function boot() 
    {
        $this->publishes([
            dirname(__DIR__).'/config/customresolutions.php' => config_path('customresolutions.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(CustomModelResolveLogic::class, function(){
            return new CustomModelResolveLogic();
        });
    }
}