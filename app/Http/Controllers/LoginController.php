<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    //login
    function checkLogin(LoginRequest $request)
    {
        //validate login
        $user_validation = $request ->all();
        
        // find by email
        $userInfo = User::where('email', '=', $user_validation['email'])->first();

        if (!$userInfo) {
            return back()->with('fail',' ');
        } else {
            //check password
            if (Hash::check($user_validation['password'], $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);

                if($userInfo->role == 'admin'){
                    return redirect('admin');
                }else{
                    return redirect('/index');
                }

            } else {
                return back()->with('fail',__('messages.fail'));
            }
        }
    }

    // logout
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

}
