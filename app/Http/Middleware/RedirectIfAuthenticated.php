<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
        
    // }

    public function handle(Request $request, Closure $next, $guard = null)
    {
        // echo $guard;die;
        if ($guard == "admin" && auth()->guard($guard)->check()) {
            return redirect()->route('admin.dashboard');
        }

        if ($guard == "web" && auth()->guard($guard)->check()) {
            echo auth()->gard();
            die;
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
