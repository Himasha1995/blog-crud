<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

});
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   // Route::get('/post/edit/{post_id}', [PostController::class,'edit_post'])->name('edit_post');
   // Route::post('/post/edit/{post_id}', [PostController::class,'update_post'])->name('update_post');
   // Route::post('/post/inline', [PostController::class,'inline'])->name('inline');*/






   Route::get('/posts', [\App\Http\Controllers\PostController::class,'index'])->name('post');
    Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create']);
    Route::post('/posts/create', [\App\Http\Controllers\PostController::class,'posts-edit']);
    Route::post('/post/edit/{post_id}', [PostController::class,'update_post']);
    Route::post('/posts/inline', [\App\Http\Controllers\PostController::class,'inline'])->name('inline');

