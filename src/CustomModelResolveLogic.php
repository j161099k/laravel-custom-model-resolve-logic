<?php

namespace J1610\CustomModelResolveLogic;

use Illuminate\Support\Facades\Route;

class CustomModelResolveLogic
{
    /**
     * Create a custom resolution function for route parameters
     * 
     * 
     * @return void
     */
    public static function createCustomResolutionLogic()
    {
        $bindings_definition = config('customresolutions');

        foreach ($bindings_definition as $parameter_name => $bind_callback) {
            Route::bind(key: $parameter_name, binder: $bind_callback);
        }
    }
}