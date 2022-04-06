<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    use HasFactory;

    public function user()
    {
        return  $this->hasOne(User::class, 'post_id', 'id');
    }

    public function cate()
    {
        return  $this->hasOne(Category::class, 'post_id', 'cate_id');
    }

    public function comment()
    {
        return  $this->hasMany('App\Models\Comment', 'id', 'post_id');
    }

    public function scopeGetPost($data)
    {
        return $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select(
                'users.id',
                'users.name',
                'posts.name_post',
                'posts.title_post',
                'posts.created_at',
                'categories.cate_name',
                'posts.image_post',
                'posts.desc',
                'posts.post_id'
            );
    }

    public function scopeGetBlog($data)
    {
        return $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select(
                'users.id',
                'users.name',
                'posts.name_post',
                'posts.title_post',
                'posts.created_at',
                'categories.cate_name',
                'posts.image_post',
                'posts.desc',
                'posts.post_id'
            );
    }


    public function scopeGetBlogWithUser($data, $user_id)
    {
        return $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select(
                'users.id',
                'users.image_user',
                'users.image_background',
                'users.name',
                'posts.name_post',
                'posts.title_post',
                'posts.created_at',
                'categories.cate_name',
                'posts.image_post',
                'posts.desc',
                'posts.post_id'
            )
            ->where('users.id', '=', $user_id);
    }
    public function scopeGetBlogWithUserId($data, $id)
    {
        return $data = Post::join('users', 'users.id', '=', 'posts.user_id')
            ->join('categories', 'categories.cate_id', '=', 'posts.cate_id')
            ->select(
                'users.id',
                'users.name',
                'posts.name_post',
                'posts.title_post',
                'posts.created_at',
                'categories.cate_name',
                'posts.image_post',
                'posts.desc'
            )
            ->where('users.id', '=', $id);
    }
}
