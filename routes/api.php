<?php

use Illuminate\Http\Request;


Route::group(['middleware'=> ['api']], function(){
    Route::resource('peserta', 'PesertaController');
    Route::resource('kelas', 'KelasController');
    Route::resource('relasi', 'RelasiController');

});



 // Route::middleware('auth:api')->get('/user', function (Request $request) {
 //     return $request->user();
 // });
