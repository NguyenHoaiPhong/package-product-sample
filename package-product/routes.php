<?php

Route::get('/hello',function(){
    echo "hello";
});

Route::group(['namespace'=>'Nhoma\Product\Controllers\Admin','prefix'=>'api'],function(){

    Route::get('/products','ProductController@index')->name('index');
    Route::post('/products/create','ProductController@post')->name('post');
    Route::put('/products/update','ProductController@post')->name('post');
    Route::delete('/products/delete','ProductController@delete')->name('delete');
});