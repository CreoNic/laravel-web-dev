<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Relationalship belongs to
    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
