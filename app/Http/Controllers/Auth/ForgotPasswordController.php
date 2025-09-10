<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOTP;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

class ForgotPasswordController extends BaseController
{
    // Tampilkan form input email
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    // Proses pengiriman OTP
    public function sendOTP(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak terdaftar']);
        }

        // Generate OTP (6 digit angka)
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->otp_expires_at = now()->addMinutes(10); // OTP berlaku 10 menit
        $user->save();

        // Kirim OTP via email
        Mail::to($user->email)->send(new SendOTP($otp));

        return redirect()->route('verify.otp.form', ['email' => $user->email])
                         ->with('status', 'Kode OTP telah dikirim ke email Anda');
    }

    // Tampilkan form verifikasi OTP
    public function showVerifyOTPForm(Request $request)
    {
        return view('auth.verify-otp', ['email' => $request->email]);
    }

    // Proses verifikasi OTP
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric'
        ]);

        $user = User::where('email', $request->email)
                    ->where('otp', $request->otp)
                    ->where('otp_expires_at', '>', now())
                    ->first();

        if (!$user) {
            return back()->withErrors(['otp' => 'Kode OTP tidak valid atau telah kadaluarsa']);
        }

        // OTP valid, tampilkan form reset password
        return view('auth.reset-password', ['email' => $request->email, 'otp' => $request->otp]);
    }

    // Proses reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('email', $request->email)
                ->where('otp', $request->otp)
                ->where('otp_expires_at', '>', now())
                ->first();

        if (!$user) {
            return back()
                ->withErrors(['otp' => 'OTP tidak valid atau sudah kadaluarsa'])
                ->withInput(); // penting agar data tidak hilang
        }

        // Update password
        $user->password = Hash::make($request->password);
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        return redirect()->route('login')->with('status', 'Password berhasil direset. Silakan login dengan password baru Anda');
    }
}
