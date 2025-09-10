<?php

namespace App\Models\hki;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'jenis_buku', 'judul_buku', 'nama_pemohon', 'tanggal_pengajuan', 'no_daftar', 'ndin', 'dokumen',
    ];
}
