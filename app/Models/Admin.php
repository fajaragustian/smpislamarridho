<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'email', 'password','image',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function organitation()
    {
        return $this->hasMany(Organitation::class);
    }
    public function sendPasswordResetNotification($token)
    {
    $this->notify(new ResetPasswordNotification($token));
    }
}
