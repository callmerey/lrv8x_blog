<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getCateAdmin(){

        $data = Category::get();
        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin/category',compact('data','user'));
    }

    function addCate(){

        $user = User::where('id', '=', session('LoggedUser'))->first();

        return view('admin/addCate',compact('user'));
    }

    function saveCate(Request $request){

        $request ->  validate([
            'cate_name'=>'required|unique:categories',
        ]);

        $cate = new Category();
        $cate->cate_name = $request->cate_name;

        $cate->save();

        return redirect()->route('admin-add-cate')->with('success',' ');
    }
    
    function editCate(Category $cate){
        $user = User::where('id', '=', session('LoggedUser'))->first();
      return view('admin.editCate',compact('cate','user'));
    }

    function updateCate(Request $request, Category $cate){

        $request ->  validate([
            'cate_name'=>'required|unique:categories',
        ]);

        $cateUpdate = Category::find($cate->cate_id);
        $cateUpdate->cate_name =  $request->cate_name;
        $cateUpdate->save();

        return redirect()->route('admin-cate-edit', [$cateUpdate])->with('msg', ' ');
    }
}
