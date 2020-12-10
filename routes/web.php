<?php

use App\fuction;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('viewTable', 'MoviesController@viewTable');
Route::resources([
    'movies' => 'MoviesController',
    'consumables' => 'ConsumableController',
    'rooms' => 'RoomController',
    'entrances' => 'EntranceController',
    'fuction' => 'FuctionController'
]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::get('movies-pdf', 'MoviesController@exportToPDF')->name('movies.pdf');
Route::get('/moviesXLS', 'MoviesController@exportToXls');
Route::get('/moviesCSV', 'MoviesController@exportToCsv');
Route::get('movies.xml', 'MoviesController@xml')->name('movies.xml');
Route::get('/moviesxml', function () {
    $movies = App\movies::all();
    return response()->xml(['movies' => $movies->toArray()]);
});



Route::get('entrances-pdf', 'EntranceController@exportToPDF') ->name('entrances.pdf');
Route::get('/entrancesXLS', 'EntranceController@exportToXls');
Route::get('/entrancesCSV', 'EntranceController@exportToCsv');
Route::get('entrance.xml', 'EntranceController@xml')->name('entrance.xml');
Route::get('/entrancexml', function () {
    $entrances = App\entrance::all();
    return response()->xml(['entrance' => $entrances->toArray()]);
});




Route::get('fuctions-pdf', 'FuctionController@exportToPDF') ->name('fuctions.pdf');
Route::get('/fuctionsXLS', 'FuctionController@exportToXls');
Route::get('/fuctionsCSV', 'FuctionController@exportToCsv');
Route::get('fuction.xml', 'FuctionController@xml')->name('fuction.xml');
Route::get('/fuctionxml', function () {
    $fuction = App\fuction::all();
    return response()->xml(['fuction' => $fuction->toArray()]);
});





Route::get('rooms-pdf', 'RoomController@exportToPDF') ->name('rooms.pdf');
Route::get('/roomsXLS', 'RoomController@exportToXls');
Route::get('/roomsCSV', 'RoomController@exportToCsv');
Route::get('Rooms.xml', 'RoomController@xml')->name('Rooms.xml');
Route::get('/Roomsxml', function () {
    $Rooms = App\Room::all();
    return response()->xml(['Rooms' => $Rooms->toArray()]);
});



Route::get('consumables-pdf', 'ConsumableController@exportToPDF') ->name('consumables.pdf');
Route::get('/consumablesXLS', 'ConsumableController@exportToXls');
Route::get('/consumablesCSV', 'ConsumableController@exportToCsv');
Route::get('consumables.xml', 'ConsumableController@xml')->name('consumables.xml');
Route::get('/consumablesxml', function () {
    $consumables = App\consumable::all();
    return response()->xml(['consumables' => $consumables->toArray()]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
