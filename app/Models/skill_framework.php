<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_framework extends Model
{
    use HasFactory;

    protected $table = "skill_frameworks";
    protected $primatyKey = "id";
    protected $fillable = [
        'id', 'skill_frameworks'
    ];
}
