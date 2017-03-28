<?php

use Illuminate\Http\Request;
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

Route::get('/tasks', 'TasksController@view');

Route::post('/reports', 'TasksController@reports');

Route::get('/task/index', 'TasksController@index');

Route::get('/task/edit/{id}', 'TasksController@edit');

Route::post('/task/update','TasksController@update');

Route::get('/account/index', 'AccountsController@index');

Route::get('/account/edit/{id}', 'AccountsController@edit');

Route::post('/account/update','AccountsController@update');

Route::post('/task/store', 'TasksController@store');
