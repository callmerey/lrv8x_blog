<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;
use Mockery\Expectation;
use App\Models\User;
use App\Models\Category;

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
        $post = new post();
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

}
