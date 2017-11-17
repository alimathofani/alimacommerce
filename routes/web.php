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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{post}', 'PostController@show')->name('post.show');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store');


Route::get('/admin', 'DashboardController@index')->name('admin.index');

Route::get('/admin/product', 'ProductController@index')->name('product.index');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/product/create', 'ProductController@store')->name('product.store');

Route::get('/admin/product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/admin/product/{product}/edit', 'ProductController@update')->name('product.update');
Route::delete('/admin/product/{product}/delete', 'ProductController@destroy')->name('product.destroy');
