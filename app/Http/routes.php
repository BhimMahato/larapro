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

Route::get('/','mycontroller@user');
//Route::get('home','vmcontroller@home');
//Route::get('contact','mycontroller@contact');
//Route::get('contact','mycontroller@contact');
// Route::get('user','mycontroller@user');
//Route::get('user','mycontroller@create');
//Route::get('user/{id}','mycontroller@show');
//Route::post('store','mycontroller@store');
Route::resource('user','mycontroller');
//Route::controllers([
//    'auth'=>'Auth\AuthController',
//    'password'=>'Auth\PasswordController'
//]);
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
//Route::get('/','vmcontroller@homepage');
//Route::get('/', 'HomeController@homepage');
Route::group(['middleware' => ['web']], function () {
    //
});

//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});
