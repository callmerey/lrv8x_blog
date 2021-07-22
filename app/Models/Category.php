<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    use HasFactory;
    
    public function post(){
        return  $this->hasMany(post::class, 'id','post_id');
    }
}
