<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function user(){
        return  $this->hasOne(User::class, 'post_id','id');
    }

    public function cate(){
        return  $this->hasOne(Category::class, 'post_id','cate_id');
    }
}
