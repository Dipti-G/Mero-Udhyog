<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','FrontController@index')->name('home');
Route::get('/fruits','FrontController@fruits')->name('fruits');
Route::get('/art','FrontController@art')->name('art');
Route::get('/contact','FrontController@contact')->name('contact');
Route::get('/dairy','FrontController@dairy')->name('dairy');
Route::get('/handicraft','FrontController@handicraft')->name('handicraft');
Route::get('/sub','FrontController@sub')->name('sub');
Route::get('/meat','FrontController@meat')->name('meat');
Route::get('/vendorratepage','FrontController@vendorratepage')->name('vendorratepage');
Route::get('/vegetable','FrontController@vegetable')->name('vegetable');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('/cart','CartController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','ProductsController');
});
