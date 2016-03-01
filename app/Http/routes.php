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
Route::group(['middleware' => ['web']],function(){
  Route::get('/', 'FrontController@signin');
  Route::post('/signin', 'AuthController@signin');
  Route::get('/signout', 'AuthController@signout');
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

Route::group(['middleware' => ['web' , 'web.console'], 'namespace' => 'Console' , 'prefix' => 'console'], function () {
    Route::get('/' , 'DashboardController@index');
    Route::get('/stnk' , 'STNKController@index');
    Route::get('/stnk/data' , 'STNKController@data');
    Route::get('/stnk/new' , 'STNKController@create');
    Route::post('/stnk' , 'STNKController@store');
    Route::get('/stnk/{id}' , 'STNKController@details');
    Route::get('/stnk/{id}/print' , 'STNKController@printpdf');
    Route::get('/stnk/{id}/edit' , 'STNKController@edit');
    Route::post('/stnk/{id}/update' , 'STNKController@update');
    Route::get('/stnk/{id}/delete' , 'STNKController@destroy');
});
