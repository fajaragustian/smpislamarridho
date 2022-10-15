<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 'name', 'slug','pembina','image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
