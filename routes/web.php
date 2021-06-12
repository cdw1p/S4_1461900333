<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

// Modul Kamar
Route::get('/', 'KamarController@index')->name('kamar.index');

// Modul Dokter
Route::get('/dokter', 'DokterController@index')->name('dokter.index');
Route::get('/dokter/create', 'DokterController@create')->name('dokter.create');
Route::post('/dokter/create', 'DokterController@store')->name('dokter.store');
Route::get('/dokter/edit/{id}', 'DokterController@edit')->name('dokter.edit');
Route::post('/dokter/edit/{id}', 'DokterController@update')->name('dokter.update');
Route::get('/dokter/delete/{id}', 'DokterController@delete')->name('dokter.delete');
Route::post('/dokter/import', 'DokterController@import')->name('dokter.import');

// Modul Pasien
Route::get('/pasien', 'PasienController@index')->name('pasien.index');
Route::get('/pasien/create', 'PasienController@create')->name('pasien.create');
Route::post('/pasien/create', 'PasienController@store')->name('pasien.store');
Route::get('/pasien/edit/{id}', 'PasienController@edit')->name('pasien.edit');
Route::post('/pasien/edit/{id}', 'PasienController@update')->name('pasien.update');
Route::get('/pasien/delete/{id}', 'PasienController@delete')->name('pasien.delete');
Route::post('/pasien/import', 'PasienController@import')->name('pasien.import');