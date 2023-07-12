<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\akuntansitransaksiController@index');
    Route::get('akuntansitransaksi', 'App\Http\Controllers\akuntansitransaksiController@index');
    
    Route::get('akuntansitransaksi/tambah', 'App\Http\Controllers\akuntansitransaksiController@tambah');
    Route::post('akuntansitransaksi/tambah_proses', 'App\Http\Controllers\akuntansitransaksiController@tambah_proses');
    Route::get('akuntansitransaksi/edit/{id}', 'App\Http\Controllers\akuntansitransaksiController@edit');
    Route::post('akuntansitransaksi/edit_proses', 'App\Http\Controllers\akuntansitransaksiController@edit_proses');
    Route::get('akuntansitransaksi/delete/{id}', 'App\Http\Controllers\akuntansitransaksiController@delete');
    


