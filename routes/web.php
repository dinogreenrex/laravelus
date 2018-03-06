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


Route::get('/', function () {
    return view('home');
});


Route::get('/items/index', [
    'as' => 'items.index', 'uses' => "ItemsController@index"]
);
Route::post('items/store',  [
    'before' => 'csrf',
    'as' => 'items.store', 'uses' => 'ItemsController@store']
);
Route::get('/items/create', [
    'as' => 'items.create', 'uses' => 'ItemsController@create']
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Route::get("/api/koalas", function(Request $request){
    return response(\App\Koala::all())->header("Accept: application/json",0);
});*/