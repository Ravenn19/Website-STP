<?php
// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Konfigurasi admin
        $admins = [
            'Warek4' => [
                'password' => 'Technopark2025',
                'redirect' => '/admin/dashboard',
                'type' => 'main_admin'
            ],
            'Buib1' => [
                'password' => 'Technopark2025',
                'redirect' => '/admin/dashboard',
                'type' => 'main_admin'
            ],
            'Hki1' => [
                'password' => 'Technopark2025',
                'redirect' => '/admin2/dashboard',
                'type' => 'hki_admin'
            ],
        ];

        // Cek login admin
        if (isset($admins[$request->username]) &&
            $admins[$request->username]['password'] === $request->password) {

            session([
                'is_admin' => true,
                'admin_username' => $request->username,
                'admin_type' => $admins[$request->username]['type']
            ]);

            return redirect($admins[$request->username]['redirect'])
                ->with('success', 'Login admin berhasil!');
        }

        // Cek login user biasa
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
            session()->forget(['is_admin', 'admin_username', 'admin_type']);
            return redirect()->intended('/user/dashboard');
        }

        return back()->withErrors([
            'login' => 'Kredensial tidak valid'
        ])->withInput();
    }

    // Logout
    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }
}
