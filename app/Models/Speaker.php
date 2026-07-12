<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speaker';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'materi', 'kategori', 'foto'];
}
