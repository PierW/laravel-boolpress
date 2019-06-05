<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getContent($id)
    {
      $post = Post::findOrFail($id);
      return view("page.show", compact('post'));
    }
}
