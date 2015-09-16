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

Route::get('/', function () {
    return view('welcome');
});
/**
 * Created By Dara on 16/9/2015
 * Register Email controller
 */
Route::get('auth/email',['middleware'=>'auth','uses'=>'Auth\EmailController@index']);
Route::post('auth/email',['middleware'=>'auth','uses'=>'Auth\EmailController@resend']);
Route::get('auth/email/{confirmation_code}','Auth\EmailController@check');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/**
 * Created By Dara on 15/9/2015
 * register home route
 */
Route::group(['prefix'=>'home','as'=>'home.'],function(){
    Route::get('/',['middleware'=>['auth'],'as'=>'home','uses'=>'HomeController@index']);
});
/**
 * Created By Dara on 16/9/2015
 * register user profile
 */
Route::group(['prefix'=>'profile','as'=>'profile.','middleware'=>['auth','email']],function(){
    Route::get('/',['as'=>'me','uses'=>'ProfileController@index']);
});