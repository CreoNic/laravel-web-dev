<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Relationalsship belongs to Post
    public function post()
    {
      return $this->belongsTo('App\Post');
    }
}
