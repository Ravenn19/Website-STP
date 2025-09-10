<?php

// app/Http/Controllers/User/BannerController.php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class BannerController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        return view('user.banner', compact('user'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        // Hapus file lama jika ada
        $oldBanner = Banner::where('user_id', $user->id)->first();
        if ($oldBanner) {
            Storage::delete([
                'public/' . $oldBanner->banner_path,
                'public/' . $oldBanner->logo_path
            ]);
        }

        // Create user folder if not exists
        if (!Storage::exists('public/uploads/' . $folderName)) {
            Storage::makeDirectory('public/uploads/' . $folderName);
        }

        // Upload banner
        $bannerPath = $request->file('banner')->store(
            'uploads/' . $folderName,
            'public'
        );

        // Upload logo
        $logoPath = $request->file('logo')->store(
            'uploads/' . $folderName,
            'public'
        );

        // Update or create banner record
        Banner::updateOrCreate(
            ['user_id' => $user->id],
            [
                'banner_path' => $bannerPath,
                'logo_path' => $logoPath,
            ]
        );

        return redirect()->route('user.banner')->with('success', 'Banner dan logo berhasil diupload! Kembali ke Halaman Dashboard Untuk Melihat Banner dan Profil');
    }
}
