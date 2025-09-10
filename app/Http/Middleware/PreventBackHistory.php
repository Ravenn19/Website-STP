<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Daftar route yang perlu proteksi
        $protectedRoutes = [
            'login',
            'register',
            'password/*',
            'user/*',
            'admin/*',
            'dashboard'
        ];

        if ($request->is($protectedRoutes)) {
            return $response
                ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
                ->header('Pragma', 'no-cache')
                ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
        }

        return $response;
    }
}
