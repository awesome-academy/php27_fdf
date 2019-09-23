<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Models\Role::class, 'role_users');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'leader_id', 'follower_id')
        ->withTimestamps();
    }

    public function followings()
    {
        return $this->belongsToMany(User::class, 'follower_id', 'leader_id')
        ->withTimestamps();
    }

    public function lesson()
    {
        return $this->hasMany(Models\Lesson::class);
    }

    public function active()
    {
        return $this->hasMany(Models\Active::class);
    }
}
