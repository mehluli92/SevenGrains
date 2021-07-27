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
Route::get('/', 'HomeController@landing')->name('landing');
Route::get('/about', 'HomeController@about')->name('about');

Auth::routes();

//home page and other pages
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admindashboard', 'AdminController@index')->name('admin');
Route::get('/users', 'HomeController@users')->name('users.index');

// contact form
Route::post('/contacts/create','ContactController@store')->name('contacts.store');
Route::get('/contacts', 'ContactController@index')->name('contacts.index');
Route::put('/contact/update/{id}','ContactController@update')->name('contacts.update');
Route::delete('/contacts/{id}/delete','ContactController@destroy')->name('contacts.destroy');

//events routes
Route::get('/events', 'EventController@index')->name('events.index');
//Route::get('/events/{id}','EventController@show')->name('events.show');
Route::get('/events/{id}/edit','EventController@edit')->name('events.edit');
Route::delete('/events/{id}/delete','EventController@destroy')->name('events.destroy');
Route::get('/events/create','EventController@create')->name('events.create');
Route::post('/events/create','EventController@store')->name('events.store');
Route::post('/event/update','EventController@update')->name('events.update');

//Blog Posts
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}','PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit','PostController@edit')->name('posts.edit');
Route::delete('/posts/{id}/delete','PostController@destroy')->name('posts.destroy');
Route::get('/create','PostController@create')->name('posts.create');
Route::post('/create','PostController@store')->name('posts.store');
Route::post('/post/update','PostController@update')->name('posts.update');

//Add Comments
Route::post('/comment/create','CommentController@store')->name('comments.store');
Route::get('/comments', 'CommentController@index')->name('comments.index');
