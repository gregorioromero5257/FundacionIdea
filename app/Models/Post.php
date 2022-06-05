<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $table = 'posts';


  public function tags()
  {
    return $this->belongsToMany('App\Models\Tag', 'post_tag', 'post_id', 'tag_id');
  }
}
