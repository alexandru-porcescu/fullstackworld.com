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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/journal', 'PostsController@index')->name('journal');

Route::get('/post/{slug}', 'PostsController@post')->name('post');
