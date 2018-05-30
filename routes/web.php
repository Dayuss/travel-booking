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
    return redirect('/login');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lokasi', 'LocationController@index')->name('lokasi')->middleware('admin');
Route::get('/lokasi/create', 'LocationController@create')->name('lokasi.add')->middleware('admin');
Route::post('/lokasi/create', 'LocationController@store')->middleware('admin');
Route::get('/lokasi/{id}/edit', 'LocationController@edit')->name('lokasi.edit')->middleware('admin');
Route::post('/lokasi/{id}/edit', 'LocationController@update')->middleware('admin');
Route::get('/lokasi/{id}/del', 'LocationController@destroy')->middleware('admin');

Route::get('/guide', 'GuideController@index')->name('guide')->middleware('admin');
Route::get('/guide/create', 'GuideController@create')->name('guide.add')->middleware('admin');
Route::post('/guide/create', 'GuideController@store')->middleware('admin');
Route::get('/guide/{id}/edit', 'GuideController@edit')->name('guide.edit')->middleware('admin');
Route::post('/guide/{id}/edit', 'GuideController@update')->middleware('admin');
Route::get('/guide/{id}/del', 'GuideController@destroy')->middleware('admin');

Route::get('/booking', 'BookingController@index')->name('booking');
Route::get('/booking/{id}', 'BookingController@create')->name('booking.create');
Route::post('/booking/{id}', 'BookingController@store');
Route::get('/booking/{id}/success', 'BookingController@success')->name('booking.success');

Route::get('/listbooking', 'ListBookingController@index')->name('listbooking');
Route::get('/listbooking/{id}/del', 'ListBookingController@destroy')->name('listbooking.delete')->middleware('admin');
