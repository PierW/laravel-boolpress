<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getPostsByCategory($type)
    {
      // dd($type);
      $category = Category::where('type', $type) -> first();

      return view('page.category', compact('category'));
    }
}
