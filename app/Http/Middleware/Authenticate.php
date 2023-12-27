<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if($request->is(config('admin.prefix').'*')){
            return route('admin.login');
        }


       if (! $request->expectsJjson()) {
        return route('login');
       }
    }
}
