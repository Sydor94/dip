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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProductController@catalog')->name('mainPage');
/*Route::get('/catalog', 'HomeController@catalog')->name('catalog');*/
Route::get('/catalog', 'ProductController@catalogAll')->name('catalogAll');
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/show-cart', 'ProductController@showCart')->name('show.cart');
Route::get('/getAddToCart/{id}', 'ProductController@getAddToCart')->name('getAddToCart');
Route::resource('/products', 'ProductController');
Route::resource('/orders', 'OrderController');
