<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
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

    function saveCate(CategoryRequest $request){

        $cate_validation = $request ->all();

        $cate = new Category();
        $cate->cate_name = $cate_validation['cate_name'];

        if($cate == null){
            return back()->with('fail',' ');
        }else{
            $cate->save();
            return redirect()->route('admin-add-cate')->with('success',__('messages.cate_success'));
        }
    }
    
    function editCate(Category $cate){
        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin.editCate',compact('cate','user'));
    }

    function updateCate(CategoryRequest $request, Category $cate){

        $cate_validation = $request ->all();

        $cateUpdate = Category::find($cate->cate_id);
        $cateUpdate->cate_name =  $cate_validation['cate_name'];

        if($cateUpdate == null){
            return back()->with('fail',__('messages.fail'));
        }else{
            $cateUpdate->save();
            return redirect()->route('admin-cate-edit', [$cateUpdate])->with('msg',__('messages.msg') );
        }
    }
}
