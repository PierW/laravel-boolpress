<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
      "firstname",
      "lastname",
      "username"
    ];

    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}
