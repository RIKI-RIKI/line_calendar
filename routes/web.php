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


Route::get('/', 'FriendsController@index');
Route::resource('friends', 'FriendsController', ['only' => ['create', 'store']]);

Route::POST('/friends/search', 'FriendsController@search')->name('friends.search');


Route::get('/index','FriendsController@getHoliday');
Route::post('/index','FriendsController@postHoliday');

