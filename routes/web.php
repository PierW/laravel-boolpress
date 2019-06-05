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

Route::get('/', 'HomeController@getLast5Post')->name('home');
Route::get('/category/{type}', 'CategoryController@getPostsByCategory')->name('posts.by.category');
Route::get('/admin/post/new', 'AdminController@createNewPost')->name('create.new.post');
Route::post('/admin/post/new', 'AdminController@saveNewPost')->name('save.new.post');
Route::get('/post/{id}', 'PostController@getContent')->name('show.content');
