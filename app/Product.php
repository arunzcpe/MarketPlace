<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = [];

  #Product and User has One to Many-Inverse Relationship
  public function user() 
  {
    return $this->belongsTo(User::class);
  }

  #Product and Comment has One to Many Relationship
  public function comments() 
  {
    return $this->hasMany("App\Comment");
  }
}
