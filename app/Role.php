<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    #Roles and Users has ManyToMany Relationship
    public function roles()
    {
        return $this->belongsToMany("App\User");
    }
}
