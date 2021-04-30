<?php

namespace App\Http\Middleware;

use Closure;

class LoginDashboardMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('session_dashboard')) {
            return redirect()->route('dashboard.login');
        }
        return $next($request);
    }
    public function terminate($request, $response)
    {
        // Store the session data...
    }
}
