<?php

namespace App\Models\hki;

use Illuminate\Database\Eloquent\Model;

class Hki extends Model
{
    // Nama tabel (jika berbeda dari default 'hkis')
    protected $table = 'hki';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'jenis_hki',
        'judul_hki',
        'nama_pemohon',
        'tanggal_pengajuan',
        'no_daftar',
        'ndin',
        'dokumen',
    ];

    // (Opsional) Jika kamu pakai timestamps dan kolomnya bukan created_at / updated_at
    // public $timestamps = true;
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
