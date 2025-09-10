<?php

namespace App\Models\hki;

use Illuminate\Support\Facades\DB;

class Aktivitas
{
    public static function getAktivitasTerbaru($limit = 5)
    {
        $sql = "
            SELECT * FROM (
                SELECT created_at AS tanggal,
                       'HKI' AS jenis,
                       judul_hki COLLATE utf8mb4_general_ci AS judul,
                       nama_pemohon COLLATE utf8mb4_general_ci AS pemohon,
                       dokumen COLLATE utf8mb4_general_ci AS dokumen
                FROM hki

                UNION ALL

                SELECT created_at AS tanggal,
                       'Buku' AS jenis,
                       judul_buku COLLATE utf8mb4_general_ci AS judul,
                       nama_pemohon COLLATE utf8mb4_general_ci AS pemohon,
                       dokumen COLLATE utf8mb4_general_ci AS dokumen
                FROM buku

                UNION ALL

                SELECT created_at AS tanggal,
                       'Prototipe' AS jenis,
                       judul_prototipe COLLATE utf8mb4_general_ci AS judul,
                       nama_pemohon COLLATE utf8mb4_general_ci AS pemohon,
                       dokumen COLLATE utf8mb4_general_ci AS dokumen
                FROM prototipe
            ) AS aktivitas
            ORDER BY tanggal DESC
            LIMIT ?
        ";

        return DB::select($sql, [$limit]);
    }
}
