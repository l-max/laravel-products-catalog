<?php

Auth::routes();

//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', 'Admin\ProductController@index');
    Route::get('/products', 'Admin\ProductController@index');

    Route::post('/products', 'Admin\ProductController@store');
    Route::get('/products/create', 'Admin\ProductController@create');

    Route::get('/products/edit/{product}', 'Admin\ProductController@edit');
    Route::post('/products/update', 'Admin\ProductController@update');

    Route::delete('/products/{product}', 'Admin\ProductController@destroy');
});

Route::get('/products/{category}', 'ProductController@index')->where('category', '[0-9]+');

Route::get('/', 'SiteController@index');
