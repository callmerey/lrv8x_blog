<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    public function post()
    {
      return $this->belongsTo('App\Models\Post', 'post_id','id');
    }
    
    public function scopeGetComment($data, $post_id)
    {
        return $data = Comment::join('users', 'users.id', '=', 'comments.user_id')
        ->join('posts', 'posts.post_id', '=', 'comments.post_id')
        ->select(
            'users.name',
            'users.image_user',
            'comments.created_at',
            'comments.desc'
        )
        ->where('posts.post_id', '=', $post_id)
        ->orWhereNull('posts.post_id');
    }
}
