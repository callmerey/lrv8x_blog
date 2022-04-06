<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

Route::get('/blog-detail/{post}', [PostController::class, 'getBlog'])->name('blog-detail');

Route::resources([
    'register' => 'RegisterController',
    'login' => 'LoginController',
    ]);
    
Route::post('auth/check', [LoginController::class, 'checkLogin'])->name('auth/check');

Route::group(['middleware' => ['AuthCheck']], function () {
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/admin/user', [UserController::class, 'getUserAdmin'])->name('admin-user');

    Route::get('/admin/post', [PostController::class, 'getPostAdmin'])->name('admin-post');

    Route::get('/delete/{post}', [PostController::class, 'deletePost'])->name('delete-post');

    Route::resources([
        'category' => 'CategoryController',
        'comment' => 'CommentController',
        'index' => 'IndexController',
        'post' => 'PostController',
        'user' => 'UserController',
        'admin' => 'AdminController',
    ]);
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
