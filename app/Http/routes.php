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

Route::get('/', [
    'uses' => 'IndexController@index', 'as' => 'index'
]);

Route::get('/services', [
    'uses' => 'ServiceController@index', 'as' => 'services.index'
]);

Route::get('/services/{id}', [
    'uses' => 'ServiceController@show', 'as' => 'services.show'
]) -> where(['id' => '[0-9]+']);