<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;

class AdminController extends Controller
{
    public function createNewPost()
    {

      $categories = Category::all();
      return view('page.new-post', compact('categories'));
    }

    public function saveNewPost(PostRequest $request)
    {
      // dd($request->all());
      $validateData = $request -> validated();
      // dd($validateData);
      $post = Post::create($validateData);
      $categoriesId = $validateData['categories'];

      $categories = Category::find($categoriesId);
      $post -> categories() -> attach($categories);
      // dd($categoriesId);

      return redirect('/')
            ->with('success', 'Post inserito con <b>successo</b>');
    }


    // Inizio funzioni per modifica POST

    public function editPost($id)
    {
      dd($id);
    }
    // Fine funzioni per modifica post
}
