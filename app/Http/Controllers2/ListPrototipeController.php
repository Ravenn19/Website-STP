<?php

namespace App\Http\Controllers2;

use Illuminate\Http\Request;
use App\Models\hki\Prototipe;
use Illuminate\Support\Facades\File;

class ListPrototipeController extends Controller
{
    public function index()
    {
        $prototipeList = Prototipe::orderBy('created_at', 'desc')->get();
        return view('admin2.ListPrototipe', compact('prototipeList')); // file resources/views/ListPrototipe.blade.php
    }

    public function hapus($id)
    {
        $prototipe = Prototipe::find($id);

        if ($prototipe) {
            if (!empty($prototipe->dokumen)) {
                $filePath = storage_path('app/uploads/' . $prototipe->dokumen);
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }

            if ($prototipe->delete()) {
                return redirect()->route('list-prototipe')->with('success', 'Data prototipe berhasil dihapus.');
            } else {
                return redirect()->route('list-prototipe')->with('error', 'Gagal menghapus data prototipe.');
            }
        }

        return redirect()->route('list-prototipe')->with('error', 'Data prototipe tidak ditemukan.');
    }
}
