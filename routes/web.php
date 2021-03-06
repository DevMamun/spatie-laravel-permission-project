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

Route::get('/home', 'HomeController@index')->name('home');


//  Post Route

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create')->middleware('permission:write post');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit')->middleware('permission:edit post');
Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
