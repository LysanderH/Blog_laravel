<?php

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



Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::get('/', 'PostController@index');
Route::post('/posts', 'PostController@store')->middleware('auth');
Route::get('/posts/create', 'PostController@create')->middleware('auth');
//route model binding
Route::get('/author/{user}/posts', 'AuthorPostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::put('/posts/{id}', 'PostController@update');

Route::get('/posts/{post}/edit', 'PostController@edit')->middleware('can:update,post');

Route::get('/posts/{id}/delete','PostController@delete')->middleware('can:delete,post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Devoir todo: commentaires deletable par le super user
