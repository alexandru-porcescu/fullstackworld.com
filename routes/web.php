<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/post/{slug}', 'PostsController@post')->name('post');

Route::get('/page/{slug}', 'PageController@index')->name('page');

Route::get('/stats', 'Admin\StatsController@index')->name('stats');

Route::get('/{slug}', 'TagsController@index')->name('tags');

Route::get('/authors', 'AuthorController@index')->name('authors');
Route::get('/author/{username}', 'AuthorController@profile')->name('author');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/search/{search}', 'SearchController@index')->name('search');
