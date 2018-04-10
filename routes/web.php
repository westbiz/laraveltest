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

Route::get('/', 'Home\HomeController@index');

Route::resource('articles', 'ArticlesController');

Route::resource('/admin', 'AdminController');

// Route::get('/articles/', 'ArticlesController@index');

// Route::get('/articles/create', 'ArticlesController@create');

// Route::get('/articles/{id}', 'ArticlesController@show');

// Route::post('/articles/', 'ArticlesController@store');

// Route::get('/articles', 'ArticlesController@edit');

// Route::get('/', function () {
// 	return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
