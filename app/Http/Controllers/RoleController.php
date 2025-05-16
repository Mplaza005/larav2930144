<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = role::all();
        
        return view('role.index', compact('roles'));
    }



      public function create()
    {
        return view('role.create');
    }


    public function store(Request $request)
    {

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect()->route('role.index');


    }
}
