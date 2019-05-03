<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = [
        'judul',
        'penerbit',
        'tahun_terbit',
        'pengarang'
    ];
}
