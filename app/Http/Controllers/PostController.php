<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Expectation;

class PostController extends Controller
{
    function post()
    {
        // send model attribute
        $items = Category::get();
        return view('user\post', compact('items'));
    }


    function save_post(Request $request)
    {

        //find id user
        $data = User::where('id', '=', session('LoggedUser'))->first();
        $id_user = $data['id'];

        //validation request
        $request->validate([
            'name_post' => 'required',
            'title_post' => 'required|',
        ]);

        if ($request->has('image_post')) {
            $file = $request->image_post;
            $ext = $request->image_post->extension();
            $fileName = time() . '-' . 'product' . $ext;
            $file->move(public_path('uploads'), $fileName);
        }

        //set request to model post
        $post = new Post();
        $post->name_post = $request->name_post;
        $post->title_post = $request->title_post;
        $post->user_id = $id_user;
        $post->cate_id = $request->cate_id;
        $post->image_post = $fileName;
        $post->desc = $request->desc;
        // save model
        try {
            $post->save();
        } catch (Expectation $e) {
            echo $e;
        }

        return redirect('index');
    }

    function get_post()
    {

        // query builder select post
        $data = post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select('users.id', 'users.name', 'posts.name_post', 'posts.title_post', 'posts.created_at', 'categories.cate_name', 'posts.image_post', 'posts.desc')
            ->get();


        $items = Category::get();
        $user = User::where('id', '=', session('LoggedUser'))->first();
        
        return view('index', compact('data', 'items', 'user'));
    }
}
