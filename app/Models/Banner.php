<?php

// app/Models/Banner.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'banner_path', 'logo_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function allBanners()
    {
        $banners = Banner::with('user')->get(); // atau ->paginate(9) kalau mau paging
        return view('user.all_banners', compact('banners'));
    }
}
