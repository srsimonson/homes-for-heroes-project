<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');

// PERSONS
Route::get('/persons', 'PersonsController@somethingPersons');
Route::get('/persons/{id}', 'PersonsController@somethingPersons');
Route::post('/persons', 'PersonsController@somethingPersons');
Route::put('/persons/{id}', 'PersonsController@somethingPersons');
Route::patch('/persons/{id}', 'PersonsController@somethingPersons');
Route::delete('/persons/{id}', 'PersonsController@somethingPersons');