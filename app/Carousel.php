<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'nama',
        'slug',
        'gambar',
        'keterangan',
        'link'
    ];
}
