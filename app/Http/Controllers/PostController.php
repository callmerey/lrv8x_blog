<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

use App\Models\post;
use Mockery\Expectation;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;

class PostController extends Controller
{

    function post()
    {
        // send model attribute
        $items = Category::get();
        return view('user\post', compact('items'));
    }


    function save_post(PostRequest $request)
    {
        //find id user
        $user = User::where('id', '=', session('LoggedUser'))->first();

        //validation request
        $post_validation = $request->all();

        // Image post
        if ($post_validation['image_post']->has('image_post')) {
            $file = $post_validation['image_post'];
            $ext = $post_validation['image_post']->extension();
            $fileName = time() . '-' . 'blog.' . $ext;
            $file->move(public_path('uploads'), $fileName);
        }

        //set request to model post
        $post = new post();
        $post->name_post = $post_validation['name_post'];
        $post->title_post = $post_validation['title_post'];
        $post->user_id = $user['id'];
        $post->cate_id = $post_validation['cate_id'];
        $post->image_post = $fileName;
        $post->desc = $post_validation['desc'];

        // save model
        if ($post == null) {
            return back()->with('fail', ' ');
        } else {
            $post->save();
            return redirect('index')->with('msg',__('messages.msg'));
        }
    }

    function editPost(Post $post)
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();

        $items = Category::get();
        return view('user\edit-post', compact('post', 'user', 'items'));
    }

    // update data request
    function updatePost(PostRequest $request, Post $post)
    {
        //validation request
        $post_validation = $request->all();

        $data = User::where('id', '=', session('LoggedUser'))->first();
        $id_user = $data['id'];

        // Image post
        if ($post_validation['image_post']->has('image_post')) {
            $file = $post_validation['image_post'];
            $ext = $post_validation['image_post']->extension();
            $fileName = time() . '-' . 'blog.' . $ext;
            $file->move(public_path('uploads'), $fileName);
        } else {
            $fileImagePost =  $post->image_post;
        }

        $postUpdate = Post::find($post->post_id);
        $postUpdate->name_post = $post_validation['name_post'];
        $postUpdate->title_post = $post_validation['title_post'];
        $postUpdate->desc = $post_validation['desc'];
        $postUpdate->user_id = $id_user;
        $postUpdate->image_post = $fileImagePost;
        $postUpdate->cate_id = $post_validation['cate_id'];

        if($postUpdate == null){
            return back()->with('fail', ' ');
        }else{
            $postUpdate->save();
            return redirect()->route('edit-post', [$postUpdate])->with('msg',__('messages.msg') );
        }
    }

    function deletePost(Post $post)
    {
        $post->delete();

        return redirect()->route('profile');
    }

    function getBlog(Post $post)
    {
        $data = Post::GetBlog()->get();

        $comment_data = Comment::GetComment($post->post_id)->get();

        $items = Category::get();

        $count_comment = Comment::where('post_id', '=', $post->post_id)->count();

        return view('user.blog-detail', compact('post', 'data', 'items', 'comment_data', 'count_comment'));
    }

    function getPostAdmin()
    {
        $data = Post::GetBlog()->get();
        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin/post', compact('data', 'user'));
    }
}
