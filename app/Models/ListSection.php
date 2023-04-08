<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_section',
        'title',
        'subtitle',
        'slug',
        'image',
        'excerpt',
        'isi',

    ];
}
