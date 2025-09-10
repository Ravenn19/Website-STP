<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Hki;

class PdaftarHkiController extends Controller
{
    public function index()
    {
        // Tampilkan form pendaftaran HKI
        return view('admin2.PdaftarHKI');
    }

    public function simpan(Request $request)
    {
        // Validasi input (opsional tapi direkomendasikan)
        $validated = $request->validate([
            'jenis_hki' => 'required|string|max:255',
            'judul_hki' => 'required|string|max:255',
            'nama_pemohon' => 'required|string|max:255',
            'tanggal_pengajuan' => 'required|date',
            'no_daftar' => 'required|string|max:255',
            'ndin' => 'required|string|max:255',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Proses upload file
        $namaFile = null;
        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $namaFile = uniqid() . '_' . $file->getClientOriginalName(); // nama unik
            $file->move(public_path('uploads'), $namaFile); // simpan ke folder public/uploads
        }

        // Simpan ke database
        Hki::create([
            'jenis_hki' => $request->input('jenis_hki'),
            'judul_hki' => $request->input('judul_hki'),
            'nama_pemohon' => $request->input('nama_pemohon'),
            'tanggal_pengajuan' => $request->input('tanggal_pengajuan'),
            'no_daftar' => $request->input('no_daftar'),
            'ndin' => $request->input('ndin'),
            'dokumen' => $namaFile,
        ]);



        return redirect()->route('pendaftaran-hki')->with('success', 'Data HKI berhasil disimpan');

    }
}
