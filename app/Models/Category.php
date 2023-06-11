<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name'
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
