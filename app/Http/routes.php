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

Route::get('/', function () {
    return view('home');
});
//Route::get('people/list','Main\MainController@getList');
Route::resource('main','Main\MainController');

Route::resource('lan','Lan\LanController');
Route::resource('php','Lan\PHPController');
Route::resource('java','Lan\JAVAController');
Route::resource('know','Know\KnowController');
Route::resource('read','Read\ReadController');
Route::resource('myUse','MyUse\MyUseController');

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

//Route::group(['middleware' => ['web'],'as' => 'main','prefix' => 'main','namespace' => 'Main'], function () {
//    Route::controller('/','MainController');
//});
