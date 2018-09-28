<?php

Route::get('/', 'PagesController@index');
Route::get('signup', 'PagesController@signupPage');

Route::get('terms-conditions', 'PagesController@termConditions');
Route::get('blogs', 'PagesController@blogs');
Route::resource('itinerary','TourDetailsController');
Route::post('/submitEnquiry','AjaxController@submitEnquiryonIti');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/itinerary/create',[
    'uses' => 'TourDetailsController@create',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Route::get('itinerary/{itinerary}/edit',[
    'uses' => 'TourDetailsController@edit',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);
Auth::routes();
