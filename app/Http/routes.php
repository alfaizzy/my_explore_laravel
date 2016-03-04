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
// link disini untuk yg ga perlu login
Route::get('/', function () {
    //return view('/home');
});

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
    //
});

///// Yang udah login masuk dibawah ini
// route yang bisa dibuka pada saat sudah login
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');

    Route::get('/menu1', 'Menu1Controller@page');
    Route::post('menu1/insert1', array('uses'=>'Menu1Controller@insert1'));
    Route::post('menu1/viewUser1', array('uses'=>'Menu1Controller@viewuser1'));

    Route::get('menu1/viewUser1get', array('uses'=>'Menu1Controller@viewUser1GET'));


});
