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

Route::get('/services/{slug}', [
    'uses' => 'ServiceController@show', 'as' => 'services.show'
]) -> where(['slug' => '[_a-z]+']);

Route::post('/ajax-get-two', [
    'uses' => 'ServiceController@ajax', 'as' => 'services.get-two'
]);


