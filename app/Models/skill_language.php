<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_language extends Model
{
    use HasFactory;

    protected $table = "skill_languages";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'skill_languages'
    ];
}
