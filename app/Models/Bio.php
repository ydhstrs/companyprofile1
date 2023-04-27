<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;
    protected $fillable = [
        'saramoda',
        'kepul',
        'indomarket',
        'legalin',
        'foundation',
        'barbekoe',
        'indoproperti',
        'indofarm',
    ];
}
