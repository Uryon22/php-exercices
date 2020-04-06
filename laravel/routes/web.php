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

Route::get('/person/average', 'PersonController@getAverage');
Route::get('/person/maxLike', 'PersonController@getMaxLike');
Route::get('/person/searchByName/{name}', 'PersonController@searchByName');
Route::get('/person/searchByYear/{year}', 'PersonController@searchByYear');
Route::get('/person/sortByLike', 'PersonController@sortByNumberLikeDesc');

Route::resource('person', 'PersonController');
