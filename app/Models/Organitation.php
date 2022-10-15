<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organitation extends Model
{
    use HasFactory;
    protected $guard = 'admin';
    protected $fillable = [
        'admin_id', 'image', 'name', 'slug', 'position',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
