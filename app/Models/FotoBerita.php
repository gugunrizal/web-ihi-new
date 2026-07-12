<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoBerita extends Model
{
    protected $table = 'foto_berita';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar',
        'deskripsi',
    ];
}
