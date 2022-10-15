<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['admin'];
    protected $fillable = [
        'name', 'slug', 'keywords', 'meta_desc',
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

}
