<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function getLast5Post()
    {
      $posts = Post::orderByDesc('updated_at')->take(5)->get();
      // dd($posts);
      return view('page.home', compact('posts'));
    }
}
