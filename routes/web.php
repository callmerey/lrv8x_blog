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


Route::post('auth/save', [RegisterController::class, 'save_login'])->name('auth/save');

Route::post('auth/check', [LoginController::class, 'check'])->name('auth/check');

Route::get('/blog-detail/{post}', [PostController::class, 'getBlog'])->name('blog-detail');

Route::get('/index', [IndexController::class, 'get_post'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/user-post/{id}', [UserController::class, 'userPost']);

Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/user', [UserController::class, 'getUserAdmin'])->name('admin-user');

    Route::get('/admin/post', [PostController::class, 'getPostAdmin'])->name('admin-post');

    Route::get('/admin/cate', [CategoryController::class, 'getCateAdmin'])->name('admin-cate');

    Route::get('/admin/cate/add', [CategoryController::class, 'addCate'])->name('admin-add-cate');

    Route::post('/admin/cate/save', [CategoryController::class, 'saveCate'])->name('admin-cate-save');

    Route::get('/admin/cate/{cate}', [CategoryController::class, 'editCate'])->name('admin-cate-edit');

    Route::post('/admin/update/{cate}', [CategoryController::class, 'updateCate'])->name('admin-cate-update');

    Route::get('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::Post('/save-comment', [CommentController::class, 'saveComment'])->name('save-comment');

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
