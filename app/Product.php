<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  #Product and User has One to Many-Inverse Relationship
  public function user() 
  {
    return $this->belongsTo(User::class);
  }

  #Product and Comment has One to Many Relationship
  public function comment() 
  {
    return $this->hasMany("App\Comments");
  }
}
