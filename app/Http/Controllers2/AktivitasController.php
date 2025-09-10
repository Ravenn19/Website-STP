<?php

namespace App\Models\hki;

use Illuminate\Support\Facades\DB;

class Aktivitas
{
    public static function getAktivitasTerbaru($limit = 5)
    {
        $sql = "
            SELECT * FROM (
                SELECT created_at AS tanggal, 'HKI' AS jenis, judul_hki AS judul, nama_pemohon AS pemohon, dokumen FROM hki
                UNION ALL
                SELECT created_at AS tanggal, 'Buku' AS jenis, judul_buku AS judul, nama_pemohon AS pemohon, dokumen FROM buku
                UNION ALL
                SELECT created_at AS tanggal, 'Prototipe' AS jenis, judul_prototipe AS judul, nama_pemohon AS pemohon, dokumen FROM prototipe
            ) AS aktivitas
            ORDER BY tanggal DESC
            LIMIT ?
        ";

        return DB::select($sql, [$limit]);
    }
}
