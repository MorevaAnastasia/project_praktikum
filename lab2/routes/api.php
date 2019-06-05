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

Route::get('/clients', 'IndexController@all');
Route::get('/clients/{id}', 'IndexController@one');
Route::post('/clients', 'IndexController@store');
Route::put('/clients/{id}', 'IndexController@change');
Route::delete('/clients/{id}', 'IndexController@deletee');

Route::get('/uslugi', 'IndexController@all1');
Route::get('/uslugi/{id}', 'IndexController@one1');
Route::post('/uslugi', 'IndexController@store1');
Route::put('/uslugi/{id}', 'IndexController@change1');
Route::delete('/uslugi/{id}', 'IndexController@deletee1');


Route::get('/zayavki', 'IndexController@all2');
Route::get('/zayavki/{id}', 'IndexController@one2');
Route::post('/zayavki', 'IndexController@store2');
Route::put('/zayavki/{id}', 'IndexController@change2');
Route::delete('/zayavki/{id}', 'IndexController@deletee2');