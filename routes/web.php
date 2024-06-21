<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
