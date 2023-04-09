<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_section',
        'typelanding',
        'title',
        'subtitle',
        'slug',
        'image',
        'excerpt',
        'isi',

    ];
    public function section()
    {
        return $this->belongsTo(Section::class, 'id_section', 'id');
    }
    public function  getRouteKeyName()
    {
        return 'slug';
    }
}
