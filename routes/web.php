<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'index', 'uses' => 'BookController@getIndex']);

Route::get('user/login', ['uses' => 'UserController@postLogin']);

Route::get('user/logout', ['uses' => 'UserController@getLogout']);












