<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'content'
    ];

    public function categories()
    {
      return $this->belongsToMany(Category::class);
    }

    public function author()
    {
      return $this->belongsTo(Author::class);
    }
}
