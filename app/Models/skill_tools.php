<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_tools extends Model
{
    use HasFactory;

    protected $table = "skill_tools";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'skill_tools'
    ];
}
