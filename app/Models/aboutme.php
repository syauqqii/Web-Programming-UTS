<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutme extends Model
{
    use HasFactory;

    protected $table = "aboutmes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'konten', 'link'
    ];
}
