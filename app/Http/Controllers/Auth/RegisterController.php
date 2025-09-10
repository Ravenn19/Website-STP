<?php
// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    // Show register form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Process registration
    public function processRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username|min:3|max:50',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required|string',
            'nama_tim' => 'required|string|max:100',
            'ketua' => 'required|string|max:100',
            'anggota1' => 'required|string|max:100',
            'anggota2' => 'required|string|max:100',
            'no_hp' => ['required', 'string', 'max:20'], // validasi nomor hp
            'proposal' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
            'profil_startup' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
            'deskripsi' => 'required|string|min:50',
            'jenis_layanan' => 'required|array|min:1',
            'jenis_layanan.*' => 'in:IoT,Machine Learning,Eco Green,Finance,Education,Other'
        ]);

        try {
            // Create folder based on team name
            $folderName = Str::slug($request->nama_tim);

            // Upload proposal file
            $proposalFile = $request->file('proposal');
            $proposalFileName = 'proposal_' . time() . '.' . $proposalFile->getClientOriginalExtension();
            $proposalPath = $proposalFile->storeAs('uploads/' . $folderName, $proposalFileName, 'public');

            // Upload profil startup file
            $profilFile = $request->file('profil_startup');
            $profilFileName = 'profil_startup_' . time() . '.' . $profilFile->getClientOriginalExtension();
            $profilPath = $profilFile->storeAs('uploads/' . $folderName, $profilFileName, 'public');

            // Create user
            $user = User::create([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'nama_tim' => $request->nama_tim,
                'ketua' => $request->ketua,
                'anggota1' => $request->anggota1,
                'anggota2' => $request->anggota2,
                'no_hp' => $request->no_hp, // simpan nomor hp
                'proposal_path' => $proposalPath,
                'profil_startup_path' => $profilPath,
                'deskripsi' => $request->deskripsi,
                'jenis_layanan' => $request->jenis_layanan,
                'role' => 'user'
            ]);

            // Auto login after registration
            Auth::login($user);

            return redirect('/user/dashboard')->with('success', 'Pendaftaran berhasil! Selamat datang di dashboard.');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar. Silakan coba lagi.'])
                        ->withInput();
        }
    }
}
