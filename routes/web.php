<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::post('auth/save', [RegisterController::class, 'save_login'])->name('auth/save');

Route::post('auth/check', [LoginController::class, 'check'])->name('auth/check');

Route::get('/logout', [LoginController::class, 'logout'])->name('auth/logout');

Route::get('/index', [PostController::class, 'get_post'])->name('index');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/user-post/{id}', [UserController::class, 'userPost']);

Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('auth/dashboard');
    Route::get('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/dashboard/settings', [LoginController::class, 'setting']);
    Route::get('/dashboard/profile', [LoginController::class, 'profile']);

    Route::get('/post', [PostController::class, 'post'])->name('post');

    Route::get('/edit-profile/{user}', [UserController::class, 'editProfile'])->name('edit-profile');

    Route::post('/save-user/{user}', [UserController::class, 'updateProfile'])->name('/save-user');

    Route::post('/post/save', [PostController::class, 'save_post'])->name('post/save');
});
