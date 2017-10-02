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
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
Route::get('itinerary', 'PagesController@itinerary');
Route::get('signup', 'PagesController@signupPage');
Route::get('terms-conditions', 'PagesController@termConditions');
Route::get('blogs', 'PagesController@blogs');
Route::get('test', 'PagesController@test1');
