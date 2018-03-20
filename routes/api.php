<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/koalas', 'Api\KoalasController@index');
Route::get('/koalas/show/{koala}', 'Api\KoalasController@show');
Route::resource('/koalas', 'Api\KoalasController');
Route::post('/koala/{koala}', 'Api\KoalasController@update');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');