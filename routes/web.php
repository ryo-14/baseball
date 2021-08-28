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

// Route::get('/', function () {
    // return view('welcome');
// });
Route::get('/', 'PagesController@top');
Route::get('/teams', 'PagesController@teams')->name('teams');

//giants
Route::get('/players', 'PagesController@players')->name('players');



Route::get('/players/giants', 'PagesController@players');

Auth::routes();


