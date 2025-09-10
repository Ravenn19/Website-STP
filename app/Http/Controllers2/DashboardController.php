<?php

namespace App\Http\Controllers2;

use Illuminate\Support\Facades\DB;
use App\Models\hki\Aktivitas;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil 5 aktivitas terbaru dari 3 tabel
        $aktivitas = Aktivitas::getAktivitasTerbaru(5);

        // Hitung jumlah berdasarkan jenis HKI
        $totalPaten = DB::table('hki')->where('jenis_hki', 'Paten')->count();
        $totalMerk  = DB::table('hki')->where('jenis_hki', 'Merek')->count();
        $totalCipta = DB::table('hki')->where('jenis_hki', 'Hak Cipta')->count();

        // Total keseluruhan
        $totalHki = $totalPaten + $totalMerk + $totalCipta;

        // Buat array jumlah bulanan untuk setiap jenis
        $bulan = range(1, 12); // Januari - Desember

        $patenMonthly = [];
        $merkMonthly  = [];
        $ciptaMonthly = [];

        foreach ($bulan as $bln) {
            $patenMonthly[] = DB::table('hki')
                ->whereMonth('created_at', $bln)
                ->where('jenis_hki', 'Paten')
                ->count();

            $merkMonthly[] = DB::table('hki')
                ->whereMonth('created_at', $bln)
                ->where('jenis_hki', 'Merek')
                ->count();

            $ciptaMonthly[] = DB::table('hki')
                ->whereMonth('created_at', $bln)
                ->where('jenis_hki', 'Hak Cipta')
                ->count();
        }

        // Kirim ke view
        return view('admin2.dashboard', compact(
            'aktivitas',
            'totalHki',
            'totalPaten',
            'totalMerk',
            'totalCipta',
            'patenMonthly',
            'merkMonthly',
            'ciptaMonthly'
        ));
    }
}
