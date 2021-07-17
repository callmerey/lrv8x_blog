<?php

namespace App\Http\Controllers;

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

    function getBlog(Post $post)
    {   

        $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select('users.id', 
                    'users.name', 
                    'posts.name_post', 
                    'posts.title_post', 
                    'posts.created_at', 
                    'categories.cate_name', 
                    'posts.image_post', 
                    'posts.desc',
                    'posts.post_id')
            ->get();


        $comment_data = Comment::join('users', 'users.id', '=', 'comments.user_id')
                                ->join('posts', 'posts.post_id', '=','comments.post_id')
                                ->select('users.name',
                                        'users.image_user',
                                        'comments.created_at',
                                        'comments.desc')
                                ->where('posts.post_id','=',$post->post_id)
                                ->orWhereNull('posts.post_id')
                                ->get();

        $items = Category::get();

        $count_comment = Comment::where('post_id','=',$post->post_id)->count();

        return view('user.blog-detail',compact('post','data','items','comment_data','count_comment'));  
    }
}
