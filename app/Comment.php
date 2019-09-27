<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    #Comment and Product has One to Many-Inverse Relationship
    public function product() 
    {
      return $this->belongsTo("App\Product");
    }

    #Comment and User has One to Many-Inverse Relationship
    public function user() 
    {
      return $this->belongsTo("App\User");
    }
}
