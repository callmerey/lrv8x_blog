<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function profile(){

        $user = User::where('id', '=', session('LoggedUser'))->first();
        $id_user = $user['id'];
        $name = $user['name'];
        $desc = $user['desc'];
        $created_at = $user['created_at'];

        $data = post::join('users', 'users.id', '=', 'posts.user_id')
        ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
        ->select('users.id', 'users.image_user','users.image_background', 'users.name', 'posts.name_post', 'posts.title_post', 'posts.created_at', 'categories.cate_name', 'posts.image_post', 'posts.desc', 'posts.post_id')
        ->where('users.id', '=', $id_user)
        ->get();

        return view('user\profile', compact('data','name','id_user','desc','created_at'));
    }

    //get user post
    function userPost($id){

        $user = User::where('id', '=', $id)->first();
        $name = $user['name'];
        $image_user = $user['image_user'];

        $data = Post::join('users', 'users.id', '=', 'posts.user_id')
        ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
        ->select('users.id', 'users.name', 'posts.name_post', 'posts.title_post', 'posts.created_at', 'categories.cate_name', 'posts.image_post', 'posts.desc')
        ->where('users.id', '=', $id)
        ->get();

        return view('user\user-post', compact('data','name','image_user'));
    }

    // edit profile
    function editProfile(User $user){

        return view('user/edit-profile',compact('user'));
    }


    // update data request
    function updateProfile(Request $request, User $user){

        if ($request->has('image_user')) {
            $file = $request->image_user;
            $ext = $request->image_user->extension();
            $fileName_avt = time() . '-' . 'user.'. $ext;
            $file->move(public_path('uploads'), $fileName_avt);
        }else{
            $fileName_avt =  $user->image_user;
        }

        if ($request->has('image_background')) {
            $file = $request->image_background;
            $ext = $request->image_background->extension();
            $fileName_back = time() . '-' . 'user-back.'.$ext;
            $file->move(public_path('uploads'), $fileName_back);
        }else{
            $fileName_back =  $user->image_background;
        }
        
        $userUpdate = User::find($user->id);
        $userUpdate->name = $request->name;
        $userUpdate->email = $user->email;
        $userUpdate->desc = $request->desc;
        $userUpdate->address = $request->address;
        $userUpdate->image_background = $fileName_back;
        $userUpdate->image_user = $fileName_avt;

        $userUpdate->save();

        return redirect()->route('edit-profile',[$user]);
    }

    function getUserAdmin(){

        $data = User::get();

        return view('admin/user',compact('data'));
    }
}
