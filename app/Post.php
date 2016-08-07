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

    //Relationalship belongs to many
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    // Relationalship has many.
    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
