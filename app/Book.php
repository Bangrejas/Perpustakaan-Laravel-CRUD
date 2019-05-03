<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'judul',
        'penerbit',
        'tahun_terbit',
        'pengarang'
    ];
}