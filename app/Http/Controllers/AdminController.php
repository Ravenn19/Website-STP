<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Proposal;
use App\Models\Profile;
use App\Models\Kehadiran;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $banners = Banner::with('user')->latest()->get();
        $teams   = User::with('banner')->where('role', 'user')->get();
        $blogs   = Blog::with('user')->latest()->get();

        // tambahkan query presensi
        $presence = Kehadiran::with('user')
            ->orderBy('tanggal', 'desc')
            ->orderBy('waktu_masuk', 'desc')
            ->paginate(20);

        return view('admin.dashboard', compact('teams', 'blogs', 'banners', 'presence'));
    }


    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function blog()
    {
        // Ambil semua blog dengan user pembuatnya
        $blogs = Blog::with('user')->latest()->get();

        return view('admin.blog', compact('blogs'));
    }

    public function showProposals()
    {
        $usersWithProposals = User::whereNotNull('proposal_path')->get();
        return view('admin.proposals', compact('usersWithProposals'));
    }

    public function showProfiles()
    {
        $usersWithProfiles = User::whereNotNull('profil_startup_path')->get();
        return view('admin.profiles', compact('usersWithProfiles'));
    }

    public function downloadUserFile($id, $type)
    {
        $user = User::findOrFail($id);

        if ($type === 'proposal') {
            if (!$user->proposal_path) abort(404, 'File proposal tidak ditemukan');
            return Storage::disk('public')->download(
                $user->proposal_path,
                $user->proposal_original_name ?? 'proposal.pdf'
            );
        }
        elseif ($type === 'profil_startup') {
            if (!$user->profil_startup_path) abort(404, 'File profil startup tidak ditemukan');
            return Storage::disk('public')->download(
                $user->profil_startup_path,
                $user->profil_startup_original_name ?? 'profil_startup.pdf'
            );
        }

        abort(404, 'Tipe file tidak valid');
    }

    public function presensiIndex(Request $request)
    {
        // Query untuk riwayat presensi dengan filter
        $presence = Kehadiran::with('user')
                    ->when($request->start_date && $request->end_date, function($query) use ($request) {
                        $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
                    })
                    ->when($request->start_date && !$request->end_date, function($query) use ($request) {
                        $query->where('tanggal', '>=', $request->start_date);
                    })
                    ->when($request->end_date && !$request->start_date, function($query) use ($request) {
                        $query->where('tanggal', '<=', $request->end_date);
                    })
                    ->orderBy('tanggal', 'desc')
                    ->orderBy('waktu_masuk', 'desc')
                    ->paginate(10);

        // Data untuk statistik dengan filter yang sama
        $teams = User::where('role', 'user')->withCount([
            'kehadiran as total_hadir' => function($query) use ($request) {
                $query->where('status', 'Hadir');
                if ($request->start_date && $request->end_date) {
                    $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
                } else if ($request->start_date && !$request->end_date) {
                    $query->where('tanggal', '>=', $request->start_date);
                } else if ($request->end_date && !$request->start_date) {
                    $query->where('tanggal', '<=', $request->end_date);
                }
            },
            'kehadiran as total_presensi' => function($query) use ($request) {
                if ($request->start_date && $request->end_date) {
                    $query->whereBetween('tanggal', [$request->start_date, $request->end_date]);
                } else if ($request->start_date && !$request->end_date) {
                    $query->where('tanggal', '>=', $request->start_date);
                } else if ($request->end_date && !$request->start_date) {
                    $query->where('tanggal', '<=', $request->end_date);
                }
            }
        ])->get();

        // Data untuk grafik
        $chartData = [
            'labels' => $teams->pluck('nama_tim')->toArray(),
            'hadir' => $teams->pluck('total_hadir')->toArray(),
            'total' => $teams->pluck('total_presensi')->toArray()
        ];

        return view('admin.presence', compact('presence', 'teams', 'chartData'));
    }

}
