<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class IndexController extends Controller
{
    function get_post()
    {

        // query builder select post
        $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select('users.id', 'users.name', 'posts.name_post', 'posts.title_post', 'posts.created_at', 'categories.cate_name', 'posts.image_post', 'posts.desc')
            ->get();

        $items = Category::get();
        $user = User::where('id', '=', session('LoggedUser'))->first();
        
        return view('index', compact('data', 'items', 'user'));
    }
}
