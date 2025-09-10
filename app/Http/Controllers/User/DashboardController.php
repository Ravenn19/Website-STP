<?php
// app/Http/Controllers/User/DashboardController.php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Dashboard
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            $user->load('banner');
        }

        $blogs = $user->blogs()->latest()->take(3)->get();

        // cek presensi hari ini
        $today = Carbon::today()->toDateString();
        $sudahAbsenHariIni = Kehadiran::where('user_id', $user->id)
            ->whereDate('tanggal', $today)
            ->exists();

        return view('user.dashboard', compact('user', 'blogs', 'sudahAbsenHariIni'));
    }


    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function uploadBanner(Request $request)
    {
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        // Create user folder if not exists
        if (!Storage::disk('public')->exists('uploads/' . $folderName)) {
            Storage::disk('public')->makeDirectory('uploads/' . $folderName);
        }

        // Upload banner
        $bannerPath = $request->file('banner')->storeAs(
            'uploads/' . $folderName,
            'banner_' . time() . '.' . $request->file('banner')->getClientOriginalExtension(),
            'public'
        );

        // Upload logo
        $logoPath = $request->file('logo')->storeAs(
            'uploads/' . $folderName,
            'logo_' . time() . '.' . $request->file('logo')->getClientOriginalExtension(),
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

        return back()->with('success', 'Banner dan logo berhasil diupload!');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|min:50',
            'jenis_layanan' => 'required|array|min:1',
            'jenis_layanan.*' => 'in:IoT,Machine Learning,Eco Green,Finance,Education,Other'
        ]);

        Auth::user()->update([
            'deskripsi' => $request->deskripsi,
            'jenis_layanan' => $request->jenis_layanan,
        ]);

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

    // View uploaded files
    public function viewFile($type, $filename)
    {
        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        $filePath = 'uploads/' . $folderName . '/' . $filename;

        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->response($filePath);
        }

        abort(404, 'File tidak ditemukan');
    }

    public function uploadProposal(Request $request)
    {
        $request->validate([
            'proposal' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        // Hapus file lama jika ada
        if ($user->proposal_path && Storage::disk('public')->exists($user->proposal_path)) {
            Storage::disk('public')->delete($user->proposal_path);
        }

        // Upload file baru
        $proposalPath = $request->file('proposal')->storeAs(
            'uploads/' . $folderName,
            'proposal_' . time() . '.' . $request->file('proposal')->getClientOriginalExtension(),
            'public'
        );

        // Simpan original filename juga
        $user->update([
            'proposal_path' => $proposalPath,
            'proposal_original_name' => $request->file('proposal')->getClientOriginalName()
        ]);

        return back()->with('success', 'Proposal berhasil diupdate.');
    }

    public function uploadProfilStartup(Request $request)
    {
        $request->validate([
            'profil_startup' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $user = Auth::user();
        $folderName = Str::slug($user->nama_tim);

        // Hapus file lama jika ada
        if ($user->profil_startup_path && Storage::disk('public')->exists($user->profil_startup_path)) {
            Storage::disk('public')->delete($user->profil_startup_path);
        }

        $profilPath = $request->file('profil_startup')->storeAs(
            'uploads/' . $folderName,
            'profil_startup_' . time() . '.' . $request->file('profil_startup')->getClientOriginalExtension(),
            'public'
        );

        // Simpan original filename juga
        $user->update([
            'profil_startup_path' => $profilPath,
            'profil_startup_original_name' => $request->file('profil_startup')->getClientOriginalName()
        ]);

        return back()->with('success', 'Profil startup berhasil diupdate.');
    }

    public function download($type)
    {
        $user = Auth::user();

        if ($type === 'proposal' && $user->proposal_path) {
            $path = $user->proposal_path;
        } elseif ($type === 'profil_startup' && $user->profil_startup_path) {
            $path = $user->profil_startup_path;
        } else {
            abort(404, 'File tidak ditemukan');
        }

        if (!Storage::disk('public')->exists($path)) {
            abort(404, 'File tidak ditemukan');
        }

        return Storage::disk('public')->download($path);
    }

    public function proposalStatus()
    {
        return view('user.proposal-status');
    }


    // Presensi: simpan
    public function presensiStore(Request $request)
    {
        $user = Auth::user();

        // cek kalau sudah presensi hari ini
        $today = Carbon::today()->toDateString();
        $sudahAbsenHariIni = Kehadiran::where('user_id', $user->id)
            ->whereDate('tanggal', $today)
            ->exists();

        if ($sudahAbsenHariIni) {
            return back()->with('error', 'Anda sudah melakukan presensi hari ini.');
        }

        Kehadiran::create([
            'user_id' => $user->id,
            'tanggal' => $today,
            'waktu_masuk' => now(),
            'status' => 'Hadir'
        ]);

        return back()->with('success', 'Presensi berhasil dicatat.');
    }


}
