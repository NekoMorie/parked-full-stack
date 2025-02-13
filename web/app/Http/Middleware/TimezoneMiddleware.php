<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimezoneMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the user's timezone from the session or a user setting
        $timezone = session('timezone', config('app.timezone'));

        // Set the application's timezone
        date_default_timezone_set($timezone);

        return $next($request);
    }
}
