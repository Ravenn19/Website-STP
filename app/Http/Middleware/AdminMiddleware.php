<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next, ...$allowedTypes): Response
    {
        // Daftar admin group
        $adminGroups = [
            'main_admin' => ['Warek4', 'Buib1'],
            'hki_admin' => ['Hki1']
        ];

        // Cek session admin
        if (!session('is_admin') || !session('admin_username')) {
            return redirect('/login')->withErrors([
                'login' => 'Akses ditolak. Silakan login sebagai admin.'
            ]);
        }

        $currentAdmin = session('admin_username');

        // Jika ada parameter, cek akses
        if (!empty($allowedTypes)) {
            $hasAccess = false;

            foreach ($allowedTypes as $type) {
                if (isset($adminGroups[$type]) && in_array($currentAdmin, $adminGroups[$type])) {
                    $hasAccess = true;
                    break;
                }
            }

            if (!$hasAccess) {
                return redirect('/login')->withErrors([
                    'login' => 'Akses ditolak. Anda tidak memiliki izin.'
                ]);
            }
        }

        return $next($request);
    }
}
