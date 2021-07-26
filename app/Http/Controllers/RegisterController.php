<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Return View Register template
    public function index()
    {
        return view('register');
    }

    public function store(RegisterRequest $request){

        $user_validation = $request ->all();
        
        //set request to model user
        $user = new User();
        $user ->name = $user_validation['name'];
        $user->role = 'user';
        $user ->image_user = 'Capture.png';
        $user->image_background = '1625747997-post_image.webp';
        $user ->email = $user_validation['email'];
        $user ->password = Hash::make($user_validation['password']);

        // save model
        if($user == null){
            return back()->with('fail',' ');
        }else{
            $user->save();
        }
        return redirect('login')->with('success',__('messages.register_success'));

    }
}