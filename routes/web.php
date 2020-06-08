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
//nav route
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
Route::get('/skills','PagesController@skills');
Route::resource('messages','MessagesController');
Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostsController');

Auth::routes();
Auth::routes();

Route::get('/works','PagesController@mywork');
