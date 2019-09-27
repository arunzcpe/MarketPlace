<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    #User and Product has OneToMany Relationship
    public function product() 
    {
        return $this->hasMany("App\Product");
    }

    #User and Comments has OneToMany Relationship
    public function comment() 
    {
        return $this->hasMany("App\Comment");
    }

    #User and Roles has ManyToMany Relationship
    public function roles()
    {
        return $this->belongsToMany("App\Role");
    }

}
