<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/posts', [PostController::class, 'index']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::post('/posts/create', [PostController::class, 'create']);
// Route::put('/posts/{id}', [PostController::class,'show']);
// Route::put('/posts/{id}', [PostController::class,'update']);
// Route::delete('/posts/{id}', [PostController::class,'destroy']);


Route::view('/', 'welcome');
Route::resource('/posts', PostController::class);
Route::get('/register', [RegisterUserController::class,'register'])->name('register');
Route::post('/register', [RegisterUserController::class,'store'])->name('register.store');

Route::get('/login', [LoginUserController::class,'login'])->name('login');
Route::post('/login', [LoginUserController::class,'store'])->name('login.store');


