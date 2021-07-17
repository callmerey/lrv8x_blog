<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;


Route::post('auth/save', [RegisterController::class, 'save_login'])->name('auth/save');

Route::post('auth/check', [LoginController::class, 'check'])->name('auth/check');

Route::get('/blog-detail/{post}', [PostController::class, 'getBlog'])->name('blog-detail');

Route::get('/index', [IndexController::class, 'get_post'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/user-post/{id}', [UserController::class, 'userPost']);

Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('auth/dashboard');
    Route::get('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::Post('/save-comment', [CommentController::class, 'saveComment'])->name('save-comment');

    Route::get('/dashboard/settings', [LoginController::class, 'setting']);
    Route::get('/dashboard/profile', [LoginController::class, 'profile']);

    Route::get('/post', [PostController::class, 'post'])->name('post');

    Route::get('/edit-profile/{user}', [UserController::class, 'editProfile'])->name('edit-profile');

    Route::get('/edit-post/{post}', [PostController::class, 'editPost'])->name('edit-post');

    Route::get('/delete/{post}', [PostController::class, 'deletePost'])->name('delete-post');

    Route::post('/save-user/{user}', [UserController::class, 'updateProfile'])->name('/save-user');

    Route::post('/save-post/{post}', [PostController::class, 'updatePost'])->name('save-post');

    Route::post('/post/save', [PostController::class, 'save_post'])->name('post/save');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
