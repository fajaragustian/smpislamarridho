<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $guarded = 'admin';
    protected $fillable = [
        'title', 'filenames','category_id',
    ];
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
