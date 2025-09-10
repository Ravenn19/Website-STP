<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Buku;
use Illuminate\Support\Facades\Storage;

class PdaftarBukuController extends Controller
{
    public function index()
    {
        return view('admin2.PdaftarBuku'); // Nama file view Blade
    }

    public function simpan(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'jenis_buku' => 'required|string',
            'judul_buku' => 'required|string',
            'nama_pemohon' => 'required|string',
            'tanggal_pengajuan' => 'required|date',
            'no_daftar' => 'nullable|string',
            'ndin' => 'nullable|string',
            'dokumen' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Simpan file jika ada
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $namaFile);
            $validated['dokumen'] = $namaFile;
        }

        // Simpan ke database
        Buku::create($validated);



        return redirect()->to(url('pendaftaran-buku'))->with('success', 'Data Buku berhasil disimpan');
    }
}
