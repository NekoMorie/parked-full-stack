<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $tittle = "Don't have acces";
        $imgError = "assets/img/403.jpg";
        $error = "403";
        $desError = "Don't have acces Go Back";
        if ($request->user()->role !== $role) {
            $tittle = "Don't have access";
            $imgError = "assets/img/403.jpg";
            $error = "403";
            $desError = "Don't have access. Go Back.";
            return response()->view('errorMessage', compact('tittle', 'imgError', 'error', 'desError'), 403);
        }

        return $next($request);
    }
}
