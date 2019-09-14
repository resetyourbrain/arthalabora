<?php

//Route untuk authentikasi user 
Route::group([
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::group(['middleware' => ['jwt.verify']], function() { 
        Route::post('logout', 'AuthController@logout');
        Route::post('me', 'AuthController@me');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('payload', 'AuthController@payload');
    });
});

//Tambah route dibawah sini

//taruh Route di luar sini untuk yang tidak perlu authentikasi
//Route::get('data', 'DataController@data');

//Buat beberapa route:group untuk hak akses yang berbeda2 pisahkan dengan | jika ada 2 atau lebih hak akses yang dapat menggunakannya
//Route::group(['middleware' => ['jwt.verify:<HAK_AKSES>']], function ()) {....
Route::group(['middleware' => ['jwt.verify']], function() { 

    //taruh Route di dalam sini untuk yang perlu authentikasi
    //Route::<Method>('<NamaURL>', '<NamaController>@<NamaFunction>');
    Route::get('test', 'TestController@indexWithUnit');
    Route::post('test', 'TestController@store');
    Route::get('test/{id}', 'TestController@show')->where('id', '[0-9]+');
    Route::put('test/{id}', 'TestController@update')->where('id', '[0-9]+');
    Route::delete('test/{id}', 'TestController@destroy')->where('id', '[0-9]+');
    
    Route::get('test-detail', 'TestController@indexWithDetail');
    Route::get('test-detail/{id}', 'TestController@showWithDetail')->where('id', '[0-9]+');

    Route::get('unit', 'UnitController@index');
    Route::post('unit', 'UnitController@store');
    Route::get('unit/{id}', 'UnitController@show')->where('id', '[0-9]+');
    Route::put('unit/{id}', 'UnitController@update')->where('id', '[0-9]+');
    Route::delete('unit/{id}', 'UnitController@destroy')->where('id', '[0-9]+');


    Route::get('barang/data', 'BarangController@index');
    Route::post('barang/data', 'BarangController@store');
    Route::get('barang/data/{id}', 'BarangController@show')->where('id', '[0-9]+');
    Route::put('barang/data/{id}', 'BarangController@update')->where('id', '[0-9]+');
    Route::delete('barang/data/{id}', 'BarangController@destroy')->where('id', '[0-9]+');

    Route::get('agen/data', 'AgenController@index');
    Route::post('agen/data', 'AgenController@store');
    Route::get('agen/data/{id}', 'AgenController@show')->where('id', '[0-9]+');
    Route::put('agen/data/{id}', 'AgenController@update')->where('id', '[0-9]+');
    Route::delete('agen/data/{id}', 'AgenController@destroy')->where('id', '[0-9]+');

    Route::get('kapal/data', 'KapalController@index');
    Route::post('kapal/data', 'KapalController@store');
    Route::get('kapal/data/{id}', 'KapalController@show')->where('id', '[0-9]+');
    Route::put('kapal/data/{id}', 'KapalController@update')->where('id', '[0-9]+');
    Route::delete('kapal/data/{id}', 'KapalController@destroy')->where('id', '[0-9]+');

    Route::get('gudang/data', 'GudangController@index');
    Route::post('gudang/data', 'GudangController@store');
    Route::get('gudang/data/{id}', 'GudangController@show')->where('id', '[0-9]+');
    Route::put('gudang/data/{id}', 'GudangController@update')->where('id', '[0-9]+');
    Route::delete('gudang/data/{id}', 'GudangController@destroy')->where('id', '[0-9]+');

    Route::get('tallysheet/data', 'TallySheetController@index');
    Route::post('tallysheet/data', 'TallySheetController@store');
    Route::get('tallysheet/data/{id}', 'TallySheetController@show')->where('id', '[0-9]+');
    Route::put('tallysheet/data/{id}', 'TallySheetController@update')->where('id', '[0-9]+');
    Route::delete('tallysheet/data/{id}', 'TallySheetController@destroy')->where('id', '[0-9]+');

    Route::get('toko/data', 'TokoController@index');
    Route::post('toko/data', 'TokoController@store');
    Route::get('toko/data/{id}', 'TokoController@show')->where('id', '[0-9]+');
    Route::put('toko/data/{id}', 'TokoController@update')->where('id', '[0-9]+');
    Route::delete('toko/data/{id}', 'TokoController@destroy')->where('id', '[0-9]+');

    Route::get('spb/data', 'SPBController@index');
    Route::post('spb/data', 'SPBController@store');
    Route::get('spb/data/{id}', 'SPBController@show')->where('id', '[0-9]+');
    Route::put('spb/data/{id}', 'SPBController@update')->where('id', '[0-9]+');
    Route::delete('spb/data/{id}', 'SPBController@destroy')->where('id', '[0-9]+');

    Route::get('robek/data', 'RobekController@index');
    Route::post('robek/data', 'RobekController@store');
    Route::get('robek/data/{id}', 'RobekController@show')->where('id', '[0-9]+');
    Route::put('robek/data/{id}', 'RobekController@update')->where('id', '[0-9]+');
    Route::delete('robek/data/{id}', 'RobekController@destroy')->where('id', '[0-9]+');

    Route::get('tujuan/data', 'TujuanController@index');
    Route::post('tujuan/data', 'TujuanController@store');
    Route::get('tujuan/data/{id}', 'TujuanController@show')->where('id', '[0-9]+');
    Route::put('tujuan/data/{id}', 'TujuanController@update')->where('id', '[0-9]+');
    Route::delete('tujuan/data/{id}', 'TujuanController@destroy')->where('id', '[0-9]+');

    Route::get('pemilik/data', 'PemilikController@index');
    Route::post('pemilik/data', 'PemilikController@store');
    Route::get('pemilik/data/{id}', 'PemilikController@show')->where('id', '[0-9]+');
    Route::put('pemilik/data/{id}', 'PemilikController@update')->where('id', '[0-9]+');
    Route::delete('pemilik/data/{id}', 'PemilikController@destroy')->where('id', '[0-9]+');

    Route::get('report/data', 'ReportController@index');
    Route::post('report/data', 'ReportController@store');
    Route::get('report/data/{id}', 'ReportController@show')->where('id', '[0-9]+');
    Route::put('report/data/{id}', 'ReportController@update')->where('id', '[0-9]+');
    Route::delete('report/data/{id}', 'ReportController@destroy')->where('id', '[0-9]+');

    Route::get('tallysheetlansir/data', 'TallySheetLansirController@index');
    Route::post('tallysheetlansir/data', 'TallySheetLansirController@store');
    Route::get('tallysheetlansir/data/{id}', 'TallySheetLansirController@show')->where('id', '[0-9]+');
    Route::put('tallysheetlansir/data/{id}', 'TallySheetLansirController@update')->where('id', '[0-9]+');
    Route::delete('tallysheetlansir/data/{id}', 'TallySheetLansirController@destroy')->where('id', '[0-9]+');



});