<?php

namespace App\Models\hki;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prototipe extends Model
{
    use HasFactory;

    protected $table = 'prototipe'; // sesuaikan dengan nama tabel di database
    protected $fillable = [
        'jenis_prototipe',
        'judul_prototipe',
        'nama_pemohon',
        'tanggal_pengajuan',
        'no_daftar',
        'ndin',
        'dokumen',
    ];
}
