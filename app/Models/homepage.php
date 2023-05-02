<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;

    protected $table = "homepages";
    protected $primatyKey = "id";
    protected $fillable = [
        'id', 'nama', 'konten', 'email'
    ];

}
