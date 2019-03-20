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

Route::get('/', 'SiteController@getHomepage');
Route::get('/about', 'SiteController@getAboutPage');
Route::get('/sector', 'SiteController@getSectorPage');
Route::get('/product', 'SiteController@getProductPage');

