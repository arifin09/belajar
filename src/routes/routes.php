<?php

Route::group(['prefix' => 'profil-npwp','middleware' => 'web'], function() {
    
    Route::get('/', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@index')->name('profil.index');
    Route::get('/create', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@create')->name('profil.create');
    Route::post('/store', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@store')->name('profil.store');
    Route::get('/edit/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@edit')->name('profil.edit');
    Route::post('/edit/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@update')->name('profil.update');
    Route::get('/delete/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@destroy')->name('profil.destroy');


});
