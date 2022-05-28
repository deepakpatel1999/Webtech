<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::post('/comments_store', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');




