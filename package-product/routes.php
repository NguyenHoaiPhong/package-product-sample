<?php

Route::get('/hello',function(){
    echo "hello";
});

Route::group(['namespace'=>'Nhoma\Product\Controllers\Admin','prefix'=>'api'],function(){
    Route::get('/users','UserController@index')->name('showalluser');
    Route::post('/users/page','UserController@paging')->name('paging');
    Route::get('/users/search','UserController@search')->name('search');
    Route::get('/users/{id}','UserController@showUser')->name('showauser');
    Route::post('/users/login','UserController@loginUser')->name('loginUser');
    Route::post('/users/logout','UserController@logoutUser')->name('logoutUser');
    Route::post('/users/create','UserController@createUser')->name('createUser');
    Route::put('/users/update/{id}','UserController@updateUser')->name('updateuser');
    Route::put('/users/change-password/{id}','UserController@changeUserPassword')->name('change-password');
    Route::delete('/users/delete/{id}','UserController@deleteUser')->name('deleteuser');

    Route::group(['prefix'=>'users'],function(){
        Route::post('/update-with-image','UserController@updateWithImage');
        Route::post('/sendMail','UserController@phuSendMail');
    });

    Route::get('/products','ProductController@index')->name('index');
    Route::post('/products/page','ProductController@paging')->name('paging');
    Route::get('/products/{id}','ProductController@showProduct')->name('showProduct');
    Route::post('/products/create','ProductController@createProduct')->name('createProduct');
    Route::put('/products/update/{id}','ProductController@updateProduct')->name('updateProduct');
    Route::delete('/products/delete/{id}','ProductController@deleteProduct')->name('deleteProduct');
});

Route::group(['namespace'=>'Nhoma\Product\Controllers'],function(){
    Route::get('/reset-pass/{token}/{email}','UserController@phuResetLink')->name('reset-link');
    Route::post('/do-reset','UserController@do_reset')->name('do-reset');
});
