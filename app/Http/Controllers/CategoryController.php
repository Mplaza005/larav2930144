<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{  
     public function index()
    {
        $categories = Category::all();
        $users = User::all();
        return view('category.index', compact('categories','users'));
    }
 
     public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index');


    }
}
