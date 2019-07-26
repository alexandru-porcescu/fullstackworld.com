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

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/journal', 'PostsController@index')->name('journal');

Route::get('/post/{slug}', 'PostsController@post')->name('post');

Route::get('/page/{slug}', 'PageController@index')->name('page');

Route::get('/stats', 'Admin\StatsController@index')->name('stats');

Route::get('/{slug}', 'TagsController@index')->name('tags');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/search/{search}', 'SearchController@index')->name('search');
