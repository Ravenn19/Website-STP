<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class LogoutController extends BaseController
{
    public function __invoke(Request $request)
    {
        // 1. Logout dari semua guard
        Auth::logout(); // Lebih baik dari pada Auth::guard('web')->logout()

        // 2. Hapus semua data session
        $request->session()->invalidate(); // ✨ Menghancurkan seluruh session

        // 3. Regenerasi token CSRF
        $request->session()->regenerateToken(); // ✨ Penting untuk keamanan

        // 4. Set header no-cache
        $response = redirect('/')->with('status', 'Anda telah logout');

        return $response->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0',
            'Pragma' => 'no-cache',
            'Expires' => 'Fri, 01 Jan 1990 00:00:00 GMT'
        ]);
    }
}
