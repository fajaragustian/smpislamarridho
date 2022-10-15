<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['admin'];
    protected $fillable = [
        'name', 'slug', 'keywords', 'meta_desc',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function ekskuls()
    {
        return $this->hasMany(Ekskul::class,'category_id','id');
    }
    public function galeris()
    {
        return $this->hasMany(Ekskul::class,'category_id','id');
    }



}
