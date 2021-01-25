<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('persons', 'PersonsController@index');
Route::group(['prefix' =>'person'], function(){
    Route::post('create', 'PersonsController@create');
    Route::get('edit/{id}', 'PersonsController@edit');
    Route::post('update/{id', 'PersonsController@update');
    Route::delete('delete/{id}', 'PersonsController@delete');
});