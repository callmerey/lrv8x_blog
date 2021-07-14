<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Return View Register template
    function register()
    {
        return view('register');
    }

    function save_login(Request $request){

        //validation request
        $request ->  validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12|confirmed',
        ]);

        //set request to model user
        $user = new User();
        $user ->name = $request->name;
        $user ->image_user = 'Capture.png';
        $user->image_background = '1625747997-post_image.webp';
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);

        // save model
        $user->save();

        return redirect('login')->with('success',' ');

    }
}