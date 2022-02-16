<?php

use Illuminate\Support\Facades\Route; //name space
use App\Http\Controllers\PostController;

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


Route::resource('posts',PostController::class);

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,"index"])->name('posts');

Route::get('/posts/{id}',[PostController::class,"show"]);

Route::get('/posts/{id}/edit',[PostController::class,"edit"])->name('posts.edit');


Route::post("/posts/{id}",[PostController::class,"update"]);

Route::get("/posts/create",[PostController::class,"create"]);

Route::post("/posts/{id}",[PostController::class,"destroy"]);
Route::post("/posts",[PostController::class,"store"]);*/