<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_title',
        'banner_title_heading_h1',
        'banner_title_heading',
        'banner_image',
    ];
}
