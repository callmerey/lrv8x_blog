<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('auth/save', [MainController::class, 'save_login'])->name('auth/save');

Route::post('auth/check', [MainController::class, 'check'])->name('auth/check');

Route::get('/logout', [MainController::class, 'logout'])->name('auth/logout');

Route::get('/index', [PostController::class, 'get_post'])->name('index');

Route::get('/login', [MainController::class, 'login'])->name('login');

Route::get('/user-post/{id}', [UserController::class, 'userPost']);

Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('auth/dashboard');
    Route::get('/register', [MainController::class, 'register'])->name('register');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/dashboard/settings', [MainController::class, 'setting']);
    Route::get('/dashboard/profile', [MainController::class, 'profile']);

    Route::get('/post', [PostController::class, 'post'])->name('post');

    Route::get('/edit-profile/{user}', [UserController::class, 'editProfile'])->name('edit-profile');

    Route::post('/save-user/{user}', [UserController::class, 'updateProfile'])->name('/save-user');

    Route::post('/post/save', [PostController::class, 'save_post'])->name('post/save');
});
