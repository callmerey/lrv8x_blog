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
            $fileName = time() . '-' . 'blog.' . $ext;
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


    function editPost(Post $post)
    {

        $user = User::where('id', '=', session('LoggedUser'))->first();
        $id_user = $user['id'];
        $name = $user['name'];
        $image_user = $user['image_user'];
        $image_background = $user['image_background'];

        $items = Category::get();
        return view('user\edit-post', compact('post', 'items', 'name', 'id_user', 'image_user', 'image_background'));
    }

    // update data request
    function updatePost(Request $request, Post $post)
    {

        $data = User::where('id', '=', session('LoggedUser'))->first();
        $id_user = $data['id'];

        if ($request->has('image_post')) {
            $file = $request->image_post;
            $ext = $request->image_post->extension();
            $fileImagePost = time() . '-' . 'blog.' . $ext;
            $file->move(public_path('uploads'), $fileImagePost);
        } else {
            $fileImagePost =  $post->image_post;
        }

        $postUpdate = Post::find($post->post_id);
        $postUpdate->name_post = $request->name_post;
        $postUpdate->title_post = $request->title_post;
        $postUpdate->desc = $request->desc;
        $postUpdate->user_id = $id_user;
        $postUpdate->image_post = $fileImagePost;
        $postUpdate->cate_id = $request->cate_id;

        $postUpdate->save();

        return redirect()->route('edit-post', [$postUpdate])->with('msg', ' ');
    }

    function deletePost(Post $post)
    {   
        
        $post->delete();

        return redirect()->route('profile');
    }
}
