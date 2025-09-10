<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exclusive extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'applicantType',
        'address',
        'institution',
        'exc', // Changed from 'lab' to 'exc'
        'date',
        'time',
        'file'
    ];
}
