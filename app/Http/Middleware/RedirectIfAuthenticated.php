<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Providers\RouteServiceProvider; // Sesuaikan dengan namespace yang benar

class RedirectIfAuthenticated {
    
}
    /**
     * Handle an incoming request.
     *
     * @param \Closure $next
     * @param string|null ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
 