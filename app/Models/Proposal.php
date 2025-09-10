<?php

// app/Models/Banner.php
namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team; // ✅ Tambahkan ini

class Proposal extends Model
{
    public function team() {
    return $this->belongsTo(Team::class, 'team_id'); // pastikan kolom foreign key benar
}

}
