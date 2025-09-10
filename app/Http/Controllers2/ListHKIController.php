<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Hki;
use Illuminate\Support\Facades\Storage;

class ListHKIController extends Controller
{
    public function index()
    {
        $hkiList = Hki::orderBy('created_at', 'desc')->get();
        return view('admin2.ListHki', compact('hkiList'));
    }

    public function hapus($id)
    {
        $hki = Hki::find($id);

        if ($hki) {
            // Hapus dokumen jika ada
            if (!empty($hki->dokumen)) {
                $filePath = 'uploads/' . $hki->dokumen;
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
            }

            $hki->delete();
            return redirect()->route('list.hki')->with('success', 'Data berhasil dihapus.');
        }

        return redirect()->route('list.hki')->with('error', 'Data tidak ditemukan.');
    }
}
