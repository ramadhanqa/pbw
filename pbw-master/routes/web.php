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

Route::resource('bookings', 'BookingUserController');


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


//peta Tour Banyuwangi One Day
Route::prefix('TourBanyuwangi')
    ->namespace('Banyuwangi\OneDay')
    ->group(function(){
        Route::get('/OneDay/Menjangan&Tabuhan', 'MenjanganTabController@index')
            ->name('MenjanganTab');
        Route::get('/OneDay/TrekkingKawahIjen', 'TrekIjenController@index')
            ->name('TrekIjen');
     
    });
//peta Tour Banyuwangi Two Day
Route::prefix('TourBanyuwangi')
    ->namespace('Banyuwangi\TwoDay')
    ->group(function(){
        Route::get('/TwoDay/PesonaBanyuwangi', 'PesBanController@index')
            ->name('PesBan');
        Route::get('/TwoDay/PesonaIjen', 'PesIjController@index')
            ->name('PesIj');
    });

//peta Tour Banyuwangi Three Day
Route::prefix('TourBanyuwangi')
    ->namespace('Banyuwangi\ThreeDay')
    ->group(function(){
        Route::get('/ThreeDay/EksplorasiBanyuwangi', 'EksBanController@index')
            ->name('EksBan');
        Route::get('/ThreeDay/KelilingBanyuwangi', 'KelBanController@index')
            ->name('KelBan');
    });
    
//peta Tour Banyuwangi Four Day
Route::prefix('TourBanyuwangi')
    ->namespace('Banyuwangi\FourDay')
    ->group(function(){
        Route::get('/FourDay/EksotiskaBanyuwangi', 'EksoBanController@index')
            ->name('EksoBan');
        Route::get('/FourDay/KelilingBanyuwangi2', 'KelBanyuController@index')
            ->name('KelBanyu');
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
        Route::resource('packet', 'PacketController');
        Route::resource('testimonial', 'TestimonialController');
    });



Auth::routes(['verify' => true]);

