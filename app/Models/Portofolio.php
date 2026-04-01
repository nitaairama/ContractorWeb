<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    // Mengizinkan field untuk diisi
    protected $fillabel = [
        'title',
        'description',
        'image',
    ];
}
