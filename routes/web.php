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
    //return 4+4;
    //return view('welcome');
    $posts = \App\Models\Post::all();
    return view('test.test',compact('posts'));
});
Route::get('/test2', function () {

    return view('test.test2');
});
/*Route::get('/test',function (){
    return view('test');
});*/
Route::get('/posts',function (){
    //$posts = \Illuminate\Support\Facades\DB::table('posts')->get();
    //return $posts;
    return \App\Models\Post::all();

});
Route::get('/post',[\App\Http\Controllers\PostController::class,'index']);

Route::get('/post/list',[\App\Http\Controllers\PostController::class,'list'])->name('post.list');

Route::get('/post/create',[\App\Http\Controllers\PostController::class,'create']);

Route::post('/post/store',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');

Route::get('/posts/{id}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');

Route::put('/posts/{id}/update',[\App\Http\Controllers\PostController::class,'update'])->name('posts.update');

Route::get('/posts/{id}/delete',[\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete');

Route::get('/post/{id}',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');


Route::get('/calculate',[\App\Http\Controllers\calculate::class,'calculate']);
