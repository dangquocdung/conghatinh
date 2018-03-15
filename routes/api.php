<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
    
});


Route::group(['prefix'=>'load', 'middleware' => 'role:tbt'], function () {
    //Load
    Route::get('cddh', 'Api\LoadTinCongController@getCDDH')->name('api-load-cddh');
    Route::get('vbm', 'Api\LoadTinController@getVBM')->name('api-load-vbm');
    Route::get('baohatinh', 'Api\LoadTinController@getBaoHaTinh')->name('api-load-baohatinh');
    
    // Route::get('llv', 'Api\LoadTinCongController@getLLV')->name('api-load-llv');
    // Route::get('dnh', 'DichVuCongController@getDNH')->name('load-dnh');
});




