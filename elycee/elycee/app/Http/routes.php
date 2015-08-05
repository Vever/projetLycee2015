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

// FRONT
	Route::get('/', 'FrontController@index');

// BACKOFFICE
	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	Route::get('/home', 'BackController@index');

//Fiches
	Route::get('/fiches', 'FicheController@showAllFiches');
	Route::get('/fiche/{id}', 'FicheController@showSingleFiche');
	Route::group(['before' => 'csrf'], function(){
		Route::post('storeFiche', 'FicheController@storeFiche');
		Route::any('updateFiche/{id}', 'FicheController@updateFiche');
	});
	Route::get('/newFiche', 'FicheController@createFiche');
	Route::get('/editFiche/{id}', 'FicheController@editFiche');
	Route::get('singleFiche/delete/{id}', 'FicheController@destroyFiche');

//Questions
	Route::get('/questions', 'QuestionController@showAllQuestions');
	Route::get('/question/{id}', 'QuestionController@showSingleQuestion');
	Route::group(['before' => 'csrf'], function(){
		Route::post('storeQuestion', 'QuestionController@storeQuestion');
		Route::any('updateQuestion/{id}', 'QuestionController@updateQuestion');
	});
	Route::get('newQuestion', 'QuestionController@createQuestion');
	Route::get('/editQuestion/{id}', 'QuestionController@editQuestion');
	Route::get('singleQuestion/delete/{id}', 'QuestionController@destroyQuestion');

//Posts
	Route::get('/posts', 'PostController@showAllPosts');
	Route::get('/single/{id}', 'PostController@showSingle');
	Route::group(['before' => 'csrf'], function(){
		Route::post('store', 'PostController@store');
		Route::any('update/{id}', 'PostController@update');
	});
	Route::get('/newPost', 'PostController@create');
	Route::get('/editPost/{id}', 'PostController@edit');
	Route::get('single/delete/{id}', 'PostController@destroy');

//Eleves
	Route::get('/students', 'BackController@showAllStudents');

