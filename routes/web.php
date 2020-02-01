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


Route::get('/index', 'PostController@index');

Route::get('/{user_id}/create', 'PostController@create');
Route::post('/{user_id}/create', 'PostController@store');
Route::get('/{user_id}/posts/{posts_id}/show', 'PostController@show');
Route::get('/{user_id}/posts/{posts_id}/edit', 'PostController@edit');
Route::post('/{user_id}/posts/{posts_id}/show', 'PostController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
