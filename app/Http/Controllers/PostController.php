<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));
    }

    public function create()
    {   
        $users = User::all();
        $categories = Category::all();
        return view('post.create', compact('categories','users'));
    }


    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index');
    }
}
