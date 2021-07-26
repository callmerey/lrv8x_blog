<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){

        $user = User::where('id', '=', session('LoggedUser'))->first();

        $data =  Post::GetBlogWithUser($user['id'])->get();

        return view('user\profile', compact('data','user'));
    }

    //get user post
    public function show($id){

        $user = User::where('id', '=', $id)->first();
        $data = Post::GetBlogWithUser($id)->get();

        return view('user\user-post', compact('data','user'));
    }

    // edit profile
    public function edit(User $user){
        return view('user/edit-profile',compact('user'));
    }

    // update data request
    public function update(Request $request, User $user){

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

        if($userUpdate == null){

        }else{
            $userUpdate->save();
            return redirect()->route('user.edit',[$user])->with('msg',__('messages.msg'));
        }
    }

    function getUserAdmin(){

        $data = User::get();

        return view('admin/user',compact('data'));
    }
}
