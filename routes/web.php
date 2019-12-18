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
Route::get('/masuk','AuthController@index')->name('auth.index');
Route::post('/auth','AuthController@login')->name('auth.login');
Route::get('/keluar','AuthController@logout')->name('auth.logout');

Route::group(['middleware' => ['admin']], function () {
    Route::get('/','HomeController@index')->name('home.index');
    Route::get('/print','PrintController@index')->name('print.index');
    Route::get('/print/tambah','PrintController@tambah')->name('print.tambah');
    Route::post('/print/simpan','PrintController@simpan')->name('print.simpan');
    Route::get('/print/{id}/edit','PrintController@edit')->name('print.edit');
    Route::get('/print/{id}/detail','PrintController@detail')->name('print.detail');
    Route::get('/rekapPrint','PrintController@rekap')->name('print.rekap');   
    Route::post('/downloadRekap','PrintController@cetakRekap')->name('print.cetak');
    Route::get('/user','UserController@index')->name('user.index');
    Route::get('/tambahuser','UserController@tambah')->name('user.tambah');
    Route::post('/tambahuser','UserController@simpan')->name('user.simpan');
});