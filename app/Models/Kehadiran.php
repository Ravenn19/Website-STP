<?php
// app/Models/Kehadiran.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';

    protected $fillable = [
        'user_id',
        'tanggal',
        'waktu_masuk',
        'status'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'waktu_masuk' => 'datetime'
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scope untuk mengecek apakah user sudah absen hari ini
    public function scopeSudahAbsenHariIni($query, $userId)
    {
        return $query->where('user_id', $userId)
                    ->whereDate('tanggal', today());
    }

    // app/Models/Kehadiran.php
    public function getNamaTimAttribute()
    {
        return $this->user?->nama_tim ?? $this->user?->name ?? 'User tidak ditemukan';
    }

}
