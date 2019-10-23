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

Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/facebook', 'HomeController@facebook');
Route::get('/messageBoard', 'HomeController@messageBoard');
Route::get('/zines', 'HomeController@zines');
Route::get('/promenade', 'HomeController@promenade');
Route::get('/events', 'HomeController@events');
Route::get('/starfleet', 'HomeController@starfleet');
Route::get('/other', 'HomeController@other');
Route::get('/members', 'HomeController@members');

/*
Route::get('/', function () {
    return view('welcome');
});
*/



