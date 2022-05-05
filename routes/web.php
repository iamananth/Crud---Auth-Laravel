<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('/login');
});
Route::get('/add-post',[PostController::class,'create'])->name('post.add');
Route::post('/add-post',[PostController::class,'store'])->name('post.save');
Route::get('/post-list',[PostController::class,'show'])->name('post.list');
Route::get('/edit-post/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/update-post',[PostController::class,'update'])->name('post.update');
Route::get('/delete-post/{id}',[PostController::class,'destroy'])->name('post.delete');

Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register-user',[AuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[AuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[AuthController::class,'logout']);