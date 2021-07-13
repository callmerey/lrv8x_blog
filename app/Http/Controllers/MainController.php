<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Mockery\Expectation;

class MainController extends Controller
{
    // Return View Login template
    function login()
    {
        return view('login');
    }

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
        $user->image_background = '1625747891-post_image.jpg';
        $user ->email = $request->email;
        $user ->password = Hash::make($request->password);

        // save model
        try{
            $user->save();
        }catch(Expectation $e){
            echo $e;
        }

        return view('login');
       
    }


    //login
    function check(Request $request){

        //validate login
        $request -> validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:12',
        ]);

        // find by email
        $userInfo = User::where('email','=', $request->email)->first();


        if(!$userInfo){
            return back()->with('fail','there was an error with the email account');
        }else{

            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/index');
            }else{
                return back()->with('fail','there was an error with the password ');
            }
        }
    }

    // logout
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];

        return view('admin/dashboard', $data);
    }
}
