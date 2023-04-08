<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'typelanding',
        'typesection',
        'title1',
        'title2',
        'title3',
        'desc1',
        'desc2',
        'desc3',
        'subtitle1',
        'subtitle2',
        'subtitle3',
        'subdesc1',
        'subdesc2',
        'subdesc3',
        'image1',
        'image2',

    ];
}
