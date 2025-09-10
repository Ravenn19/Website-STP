<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable, CanResetPasswordTrait;

    protected $fillable = [
        'email',
        'username',
        'password',
        'nama_tim',
        'ketua',
        'anggota1',
        'anggota2',
        'no_hp',
        'proposal_path',
        'profil_startup_path',
        'deskripsi',
        'jenis_layanan',
        'role',
        'banner_path',
        'profil_startup_path',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'jenis_layanan' => 'array', // Cast JSON to array
    ];

    // Accessor untuk mendapatkan jenis layanan sebagai string
    public function getJenisLayananStringAttribute()
    {
        if (is_array($this->jenis_layanan)) {
            return implode(', ', $this->jenis_layanan);
        }
        return $this->jenis_layanan;
    }

    // Accessor untuk URL proposal
    public function getProposalUrlAttribute()
    {
        if ($this->proposal_path) {
            return Storage::disk('public')->url($this->proposal_path);
        }
        return null;
    }

    // Accessor untuk URL profil startup
    public function getProfilStartupUrlAttribute()
    {
        if ($this->profil_startup_path) {
            return Storage::disk('public')->url($this->profil_startup_path);
        }
        return null;
    }

    // Check if user is admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Check if user is regular user
    public function isUser()
    {
        return $this->role === 'user';
    }

    // Get team members as array
    public function getTeamMembersAttribute()
    {
        return [
            'ketua' => $this->ketua,
            'anggota1' => $this->anggota1,
            'anggota2' => $this->anggota2,
        ];
    }

    // app/Models/User.php
    protected $fillable1 = [
        'name', 'email', 'password', 'banner_path', 'logo_path', 'deskripsi', 'jenis_layanan'
    ];

    // app/Models/User.php
    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class);
    }

}
