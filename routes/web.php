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


Route::get('/index', 'PostController@index')->name('index');

Route::get('/users/{user_id}/create', 'PostController@create');
Route::post('/users/{user_id}/create', 'PostController@store');
// Route::post('/users/{user_id}/create', 'AmazonApiController@search');
Route::get('/users/{user_id}/posts/{posts_id}/show', 'PostController@show');
Route::get('/users/{user_id}/posts/{posts_id}/edit', 'PostController@edit');
Route::post('/users/{user_id}/posts/{posts_id}/show', 'PostController@update');


// Route::get('login/twitter', 'Auth\LoginController@redirectToTwitterProvider');
// Route::get('login/twitter/callback', 'Auth\LoginController@handleTwitterProviderCAllback');

Route::get('/users/{user_id}', 'UserController@showProf')->name('users.users');
Route::get('/users/{user_id}/edit', 'UserController@showProfEditForm')->name('users.edit');
Route::post('/users/{user_id}/edit', 'UserController@edit');


Auth::routes();

// これはいる？？
Route::get('/home', 'HomeController@index')->name('home');
