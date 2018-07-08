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

Auth::routes();

//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', 'ProductController@index');
    Route::get('/products', 'ProductController@index');

    Route::post('/products', 'ProductController@store');
    Route::get('/products/create', 'ProductController@create');

    Route::get('/products/edit/{product}', 'ProductController@edit');
    Route::post('/products/update', 'ProductController@update');

    Route::delete('/products/{product}', 'ProductController@destroy');
});