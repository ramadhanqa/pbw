<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//route peta home ambil fungsi index
Route::get('/', 'HomeController@index' )
    ->name('home');

Route::get('/profil', 'ProfilKamiController@index' )
    ->name('profil');

// Route::get('/booking', 'BookingController@index' )
//     ->name('booking');



Route::get('/detail', 'DetailController@index' )
    ->name('detail');

//peta TourMalangBromo One Day
Route::prefix('TourBromoMalang')
    ->namespace('Malang\OneDay')
    ->group(function(){
        Route::get('/OneDay/TourBromoMidnight', 'BromoMidController@index')
            ->name('TourBromoMidnight');
        Route::get('/OneDay/TourKawahIjen', 'KawahIjenController@index')
            ->name('TourKawahIjen');
        Route::get('/OneDay/MenjanganTabuhan', 'MenjanganController@index')
            ->name('MenjanganTabuhan');
        Route::get('/OneDay/OpenTrip', 'OpenTripController@index')
            ->name('OpenTrip');
    });

Route::prefix('TourBromoMalang')
    ->namespace('Malang\TwoDay')
    ->group(function(){
        Route::get('/TwoDay/TourBromoBatuMalang', 'BromoBatuController@index')
            ->name('BromoBatu');
        Route::get('/TwoDay/TourBromoInap', 'BromoInapController@index')
            ->name('BromoInap');
        Route::get('/TwoDay/TourKawahIjen&Baluran', 'IjenBaluranController@index')
            ->name('TourKawahIjen&Baluran');
        Route::get('/TwoDay/TourKawahIjen&Menjangan', 'IjenMenjanganController@index')
            ->name('TourKawahIjen&Menjangan');
    });

Route::prefix('TourBromoMalang')
    ->namespace('Malang\ThreeDay')
    ->group(function(){
        Route::get('/ThreeDay/TourBaluran&Ijen', 'BaluranIjenController@index')
            ->name('BaluranIjen');
        Route::get('/ThreeDay/TourBromo&MalangBatu', 'BromoMalangController@index')
            ->name('BromoMalang');
        Route::get('/ThreeDay/TourBromoIjen&Baluran', 'IjenBaluranController@index')
            ->name('IjenBaluran');
        Route::get('/ThreeDay/RequestTrip', 'RequestTripController@index')
            ->name('RequestTrip');
    });

//peta admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('travel-packages', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('booking', 'BookingController');

    });

Route::resource('bookings', 'BookingUserController');
//peta admin
// Route::prefix('bookings')
//     ->group(function(){
//         Route::get('/', 'BookingUserController@index')
//             ->name('bookings');
//         Route::resource('', 'BookingUserController');

//     });


Auth::routes(['verify' => true]);

