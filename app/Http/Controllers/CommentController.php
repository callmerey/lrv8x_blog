<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function saveComment(Request $request){


        $request->validate([
            'comment' => 'required',
        ]);

        $id = $request->post_id;
         //find id user
         $data = User::where('id', '=', session('LoggedUser'))->first();
         $id_user = $data['id'];
        
         if($id_user == null){
            return back()->with('user_login',' ');
         }

         $comment = new Comment();
         $comment->desc = $request->comment;
         $comment->post_id = $id;
         $comment->user_id =$id_user;

         $comment->save();
         return redirect()->route('blog-detail',[$id]);
    }
}
