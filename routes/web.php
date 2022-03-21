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

// Route::get('/', 'HomeController@index')->name('welcome');

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Admin Group Router
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');


    Route::get('gallery','GalleryController@index')->name('gallery.index');
    Route::get('gallery/create','GalleryController@create')->name('gallery.create');
    Route::post('gallery/store','GalleryController@store')->name('gallery.store');
    Route::post('gallery/delete/{id}','GalleryController@delete')->name('gallery.delete');

    Route::get('get-reservation','ReservationController@indexCurrent')->name('curr.index');
    Route::get('get-done-reservation','ReservationController@indexDone')->name('done.index');
    Route::post('accept-reservation/{id}','ReservationController@acceptReservation')->name('accept.reservation');
    Route::post('cancel-reservation/{id}','ReservationController@cancelReservation')->name('cancel.reservation');
});


Route::group( [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { 
        Route::get('/', 'HomeController@index')->name('welcome');
        Route::get('/gallery','GalleryController@index')->name('get.image');

        Route::post('/reservation', 'ReservationController@reserve')->name('reservation.reserve');
    }
);
