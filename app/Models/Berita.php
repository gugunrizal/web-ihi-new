<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'penulis',
        'tanggal_rilis',
        'isi_berita',
        'ringkasan_berita',
        'slug',
        'gambar_berita',
        'status',
        'kategori',
    ];
}
