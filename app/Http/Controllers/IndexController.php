<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        // query builder select post
       
        $data = Post::GetPost()->get();

        $items = Category::get();
        $user = User::where('id', '=', session('LoggedUser'))->first();

        return view('index', compact('data', 'items', 'user'));
    }
}
