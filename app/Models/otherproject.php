<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otherproject extends Model
{
    use HasFactory;

    protected $table = "otherprojects";
    protected $primatyKey = "id";
    protected $fillable = [
        'id', 'judul', 'konten', 'link'
    ];
}
