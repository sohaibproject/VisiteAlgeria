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
    return view('front.site');
});
Route::get('site', function () {
    return view('front.site');
});
Route::get('admin', function () {
    return view('admin.dashboard');
});


//  begin for testing

Route::post('/remove_image','admincontroller\DashboardController@remove'); 
Route::post('/store-images','admincontroller\DashboardController@load'); 
Route::get('test','admincontroller\DashboardController@index'); 

// end for testing


// Route::get('getphoto', 'admincontroller\DashboardController@index');
// Route::post('loadimage', 'admincontroller\DashboardController@action')->name('images.upload');
//  Begin routing for categorie
Route::group(['namespace'=>'admincontroller'], function () {
    Route::resource('categorie', 'CategorieController');
    Route::get('delete_categorie\{id}', 'CategorieController@delete')->name('categorie.delete');
});
//  End routing for categorie

//  Begin routing for driver
Route::group(['namespace'=>'admincontroller'], function () {
    Route::resource('driver', 'DriverController');
    Route::get('delete_driver\{id}', 'DriverController@destroy')->name('driver.delete');

});
//  End routing for driver

//  Begin routing for hotel
Route::group(['namespace'=>'admincontroller'], function () {
    Route::resource('hotel', 'HotelController');
    Route::get('delete_hotel\{id}', 'HotelController@destroy')->name('hotel.delete');

}); 
//  End routing for hotel

//  Begin routing for room
Route::group(['namespace'=>'admincontroller'], function () {
    Route::resource('room', 'RoomsController');
    Route::get('delete_room\{id}', 'RoomsController@destroy')->name('room.delete');

}); 
//  End routing for room


//  Begin routing for willaya
Route::group(['namespace'=>'admincontroller'], function () {
    Route::resource('willaya', 'WillayaController');
    Route::get('delete_willaya\{id}', 'WillayaController@destroy')->name('willaya.delete');

}); 
//  End routing for willaya

//  Begin routing for places
Route::group(['namespace'=>'admincontroller'], function () {
   
    Route::resource('place','PlacesController');
    Route::get('delete_place\{id}','PlacesController@destroy')->name('place.delete');
    Route::post('/remove_pre_image','PlacesController@remove_pre'); 
    Route::post('/remove_image','PlacesController@remove'); 
    Route::post('/store-images','PlacesController@load');

    
});
//  End routing for places

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


