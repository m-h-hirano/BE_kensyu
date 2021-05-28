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

Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('home');});
Route::get('/users/edit', function () {return view('users.edit');});
Route::get('/thread/add', function () {return view('thread.add');});
Route::get('/thread/create', function () {return view('thread.create');});
Route::get('/thread/detail','ThreadCommentController@index');
Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register','Auth\RegisterController@register');
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login','Auth\LoginController@login');
Route::get('/auth/logout','Auth\LoginController@logout');
Route::get('/thread','ThreadInfoController@index');
Route::post('/thread/create','ThreadInfoController@store');
Route::post('/thread/detail','ThreadCommentController@store');
Route::get('/users/edit', 'UsersController@index');
Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/edit', 'UsersController@update');
Route::group(['middleware' => ['auth']], function() {
  // your routes
  //Route::get('/thread','ThreadInfoController@index');
});