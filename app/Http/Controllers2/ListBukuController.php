<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Buku;
use Illuminate\Support\Facades\Storage;

class ListBukuController extends Controller
{
    public function index()
    {
        $bukuList = Buku::orderBy('created_at', 'desc')->get();

        return view('admin2.ListBuku', compact('bukuList')); // Pastikan view-nya adalah resources/views/list_buku.blade.php
    }

    public function hapus($id)
    {
        $buku = Buku::find($id);

        if ($buku) {
            if (!empty($buku->dokumen)) {
                $filePath = storage_path('app/public/uploads/' . $buku->dokumen);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            if ($buku->delete()) {
                return redirect()->route('list-buku')->with('success', 'Data buku berhasil dihapus.');
            } else {
                return redirect()->route('list-buku')->with('error', 'Gagal menghapus data buku.');
            }
        } else {
            return redirect()->route('list-buku')->with('error', 'Data buku tidak ditemukan.');
        }
    }
}
