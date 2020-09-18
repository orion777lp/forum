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

//Default
Route::get('/', function (){
   return view('welcome');
});

//Route for add/delete category
Route::group(['prefix' => 'category'], function () {

    Route::delete('/delete/{id}', '\App\Http\Controllers\CategoryController@delete')->name('category.delete');

    Route::post('/create', '\App\Http\Controllers\CategoryController@store')->name('category.create');

    Route::get('/get', '\App\Http\Controllers\CategoryController@index')->name('category.index');

});

//Route for add/delete post
Route::group(['prefix' => 'post'], function () {

    Route::delete('/delete/{id}', '\App\Http\Controllers\PostController@delete')->name('post.delete');

    Route::post('/create', '\App\Http\Controllers\PostController@store')->name('post.create');

    Route::get('/get', '\App\Http\Controllers\PostController@index')->name('post.index');

});

//Route for subscribe/unsubscribe category
Route::group(['prefix' => 'subscribe'], function () {

    Route::post('/set', '\App\Http\Controllers\SubscribeController@store')->name('subscribe.set');

    Route::get('/get/{user_id}', '\App\Http\Controllers\SubscribeController@index')->name('subscribe.index');

});

//Route for add comment at NestedSet
Route::group(['prefix' => 'comment'], function () {

    Route::post('/create', '\App\Http\Controllers\CommentController@store')->name('comment.add');

});


