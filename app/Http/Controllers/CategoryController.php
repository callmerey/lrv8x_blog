<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $data = Category::get();
        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin/category',compact('data','user'));
    }

    public function create(){

        $user = User::where('id', '=', session('LoggedUser'))->first();
        return view('admin/addCate',compact('user'));
    }

    public function store(CategoryRequest $request){

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
    
    public function edit(Category $category){
        $user = User::where('id', '=', session('LoggedUser'))->first();

        return view('admin.editCate',compact('category','user'));
    }

    public function update(CategoryRequest $request, Category $category){

        $cate_validation = $request ->all();

        $cateUpdate = Category::find($category->cate_id);
        $cateUpdate->cate_name =  $cate_validation['cate_name'];

        if($cateUpdate == null){
            return back()->with('fail',__('messages.fail'));
        }else{
            $cateUpdate->save();
            return redirect()->route('category.edit', [$cateUpdate])->with('msg',__('messages.msg') );
        }
    }
}
