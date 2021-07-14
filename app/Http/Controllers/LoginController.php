<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Return View Login template
    function login()
    {
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
            return back()->with('fail');
        }else{

            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/index');
            }else{
                return back()->with('fail');
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
