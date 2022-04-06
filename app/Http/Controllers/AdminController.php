<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin/index',compact('user'));
    }

    
}
