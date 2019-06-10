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
      $post = Post::findOrFail($id);
      $categories = Category::all();
      $myCategories = $post -> categories;
      return view('page.edit', compact('post', 'categories', 'myCategories'));
    }

    public function storePost(PostRequest $request, $id)
    {
      // dd($request -> all());
      // dd($id);
      $validateData = $request -> validated();
      $post = Post::whereid($id)->update($validateData);
      // dd($validateData);
      return redirect("/post/$id")
          ->with('success', "Post <b>$id</b> aggiornato correttamente!");
    }
    // Fine funzioni per modifica post
}
