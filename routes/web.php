<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[PostController::class,'home']);

Route::get('/about',[PostController::class,'about']);

Route::get('/blog',[PostController::class,'blog']);

Route::get('/blog/{post:slug}',[PostController::class,'article']);

// Route::get('/categories',[CategoryController::class,'categories']);

Route::get('/categories',[CategoryController::class,'index']);

Route::get('/categories/{category:slug}',[CategoryController::class,'show']);

Route::get('/author/{author:username}',[UserController::class,'author']);

