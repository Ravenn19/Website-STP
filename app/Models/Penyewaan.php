<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'applicantType',
        'address',
        'institution',
        'faculty',
        'lab',
        'date',
        'time',
        'file',
    ];
}

