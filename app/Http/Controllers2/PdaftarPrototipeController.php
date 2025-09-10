<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Prototipe;

class PdaftarPrototipeController extends Controller
{
    public function index()
    {
        return view('admin2.PdaftarPrototipe'); // view di resources/views/pendaftaran/prototipe.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_prototipe' => 'required|string|max:255',
            'judul_prototipe' => 'required|string|max:255',
            'nama_pemohon' => 'required|string|max:255',
            'tanggal_pengajuan' => 'required|date',
            'no_daftar' => 'nullable|string|max:255',
            'ndin' => 'nullable|string|max:255',
            'dokumen' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $namaFile = null;

        if ($request->hasFile('dokumen') && $request->file('dokumen')->isValid()) {
            $namaFile = $request->file('dokumen')->store('uploads', 'public');
        }

        Prototipe::create([
            'jenis_prototipe' => $request->jenis_prototipe,
            'judul_prototipe' => $request->judul_prototipe,
            'nama_pemohon' => $request->nama_pemohon,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'no_daftar' => $request->no_daftar,
            'ndin' => $request->ndin,
            'dokumen' => $namaFile,
        ]);



        return redirect()->route('prototipe.index')->with('success', 'Data Prototipe berhasil disimpan');
    }
}
