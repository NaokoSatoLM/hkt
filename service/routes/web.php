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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', 'HomeController@index');
Route::get('/orders/{code}', 'ShipController@index');

Route::get('/ks_index', 'ShipController@ksIndex');
Route::post('/ks_index', 'ShipController@ksSearch');
Route::get('/ks_check', 'ShipController@ksCheck');
Route::get('/past_order_detail', 'ShipController@showDetail');

