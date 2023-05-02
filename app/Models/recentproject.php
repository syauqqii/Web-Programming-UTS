<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recentproject extends Model
{
    use HasFactory;

    protected $table = "recentprojects";
    protected $primatyKey = "id";
    protected $fillable = [
        'id', 'path_foto', 'judul', 'konten', 'link'
    ];
}
