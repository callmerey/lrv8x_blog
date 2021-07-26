<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
      public function store(CommentRequest $request){

        $comment_validation = $request ->all();

        $id = $request->post_id;
         //find id user
         $user = User::where('id', '=', session('LoggedUser'))->first();
        
         if($user['id'] == null){
            return back()->with('user_login',' ');
         }
         $comment = new Comment();
         $comment->desc = $comment_validation['comment'];
         $comment->post_id = $id;
         $comment->user_id =$user['id'];

         if($comment == null){
            return back()->with('fail',' ');
         }else{
            $comment->save();
            return redirect()->route('blog-detail',[$id]);
         }
        
    }
}
