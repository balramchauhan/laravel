<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  //  Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
   // Route::post('login', array('as' => 'login', 'uses' => 'UsersController@login'));
    Route::get('contact', array('as' => 'contact', 'uses' => 'UsersController@create'));
    Route::post('contact', array('as' => 'contact_store', 'uses' => 'UsersController@store'));
    Route::get('admin', 'AdminController@index');
    Route::get('/', 'Auth\AuthController@getLogin');
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::get('profile', 'AdminController@editProfile');
    Route::post('updateprofile', 'AdminController@updateProfile1');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
    Route::get('post/add', 'PostController@add');
    Route::post('post/add', 'PostController@savePost');
    Route::post('addcomment', 'PostController@addComment');
    Route::get('about', 'AdminController@about');
    Route::post('like', 'PostController@like');
    Route::get('people', 'AdminController@people');
    Route::get('addfriend/{friendid}' , 'AdminController@addfriend');
    //
});

//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...



Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
