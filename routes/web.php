<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contents\BlogController;
use App\Http\Controllers\Contents\MasterController;
use App\Http\Controllers\Contents\Master1Controller;
use App\Http\Controllers\Contents\Master2Controller;
use App\Http\Controllers\Contents\Master3Controller;
use App\Http\Controllers\Contents\Master4Controller;
use App\Http\Controllers\Contents\Master5Controller;
use App\Http\Controllers\Contents\Master6Controller;
use App\Http\Controllers\Contents\Master7Controller;
use App\Http\Controllers\Contents\TravelController;
use App\Http\Controllers\Contents\NtfController;
use App\Http\Controllers\Contents\LifeStyleController;





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


Route::group(['middleware' => ['auth']], function() {
    Route::resource('posts', PostController::class);
});




    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
     //Route::get('/post/edit/{post_id}', [PostController::class,'edit_post'])->name('edit_post');
    //Route::post('/post/edit/{post_id}', [PostController::class,'update_post'])->name('update_post');
     // Route::post('/post/inline', [PostController::class,'inline'])->name('inline');*/


    
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('posts');
        // Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create']);
        // Route::get('/posts/edit/{post_id}', [App\Http\Controllers\PostController::class,'edit_post'])->name('edit_post');
        //Route::post('/posts/edit/{post_id}', [App\Http\Controllers\PostController::class,'update_post'])->name('update_post');
        // Route::post('/posts/inline', [App\Http\Controllers\PostController::class,'inline'])->name('inline');
    
   



   //Route::get('/posts', [\App\Http\Controllers\PostController::class,'index'])->name('posts');
    //Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create']);
    //Route::post('/posts/create', [\App\Http\Controllers\PostController::class,'posts-edit']);
    //Route::post('/posts/show', [\App\Http\Controllers\PostController::class,'posts-show']);
    //Route::post('/posts/inline', [\App\Http\Controllers\PostController::class,'inline'])->name('inline');

    Route::get('/blog', [App\Http\Controllers\Contents\BlogController::class, 'index'])->name('index');
    Route::get('/blog-details', [App\Http\Controllers\Contents\BlogDetailsController::class, 'index'])->name('index');
    Route::get('/index', [App\Http\Controllers\Contents\MasterController::class, 'index'])->name('index');
    Route::get('/index-2', [App\Http\Controllers\Contents\Master1Controller::class, 'index'])->name('index-2');
    Route::get('/index-3', [App\Http\Controllers\Contents\Master2Controller::class, 'index'])->name('index-3');
    Route::get('/index-4', [App\Http\Controllers\Contents\Master3Controller::class, 'index'])->name('index-4');
    Route::get('/index-5', [App\Http\Controllers\Contents\Master4Controller::class, 'index'])->name('index-5');
    Route::get('/index-6', [App\Http\Controllers\Contents\Master5Controller::class, 'index'])->name('index-6');
    Route::get('/index-7', [App\Http\Controllers\Contents\Master6Controller::class, 'index'])->name('index-7');
    Route::get('/index-8', [App\Http\Controllers\Contents\Master7Controller::class, 'index'])->name('index-8');
    Route::get('/travel', [App\Http\Controllers\Contents\TravelController::class, 'index'])->name('travel');
    Route::get('/lifestyle', [App\Http\Controllers\Contents\LifeStyleController::class, 'index'])->name('lifestyle');
    Route::get('/ntf', [App\Http\Controllers\Contents\NtfController::class, 'index'])->name('ntf');





