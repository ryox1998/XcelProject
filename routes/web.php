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
    return view('importExport');
});

Route::get('/sheet', function () {
    return view('sheet');
});

Route::resources([
    '/xcel' => 'XcelController',
]);

Route::post('/xcel', 'XcelController@datashow')->name('xcel.datashow') ;

Route::post('/import' , 'XcelContrller@import')->name('xcel.import');

Route::get('upload', 'XcelController@import');
Route::post('ImportClients', 'XcelController@importClients' );
