<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index');


// BACKOFFICE
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::get('/home', 'BackController@index');

//Articles
Route::get('/posts', 'BackController@showAllPosts');
Route::get('/single/{id}', 'BackController@showSingle');
Route::group(['before' => 'csrf'], function(){
	Route::post('store', 'BackController@store');
	Route::any('update/{id}', 'BackController@update');
});
Route::get('/newPost', 'BackController@create');
Route::get('/editPost/{id}', 'BackController@edit');
Route::get('single/delete/{id}', 'BackController@destroy');

//Eleves
Route::get('/students', 'BackController@showAllStudents');