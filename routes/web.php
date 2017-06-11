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

Route::get('/welcome','UsersController@getWelcome')->name('home');

Route::get('register','UsersController@ViewRegisterForm')->name('registering')->middleware('guest');
Route::post('register','UsersController@RegisterStore')->middleware('guest');
Route::post('/logout','UsersController@Logout')->name('logging.out');
Route::post('login','UsersController@LogIn')->name('logging.in');
Route::resource('brands','BrandsController');
Route::resource('products','ProductsController');
Route::get('motorcycles','ProductsController@MotorCategory')->name('motor.cat');
Route::get('cars','ProductsController@CarsCategory')->name('cars.cat');
Route::get('vans','ProductsController@VansCategory')->name('vans.cat');
Route::get('/add-to-cart/{product}','ProductsController@AddCart')->name('carting');
Route::get('/mycart-list','ProductsController@DisplayCartList')->name('orderlisting');

Route::post('/minus-quantity/{product}','ProductSessionPlusMin@subQTY')->name('subqty');
Route::post('/add-quantity/{product}','ProductSessionPlusMin@addQTY')->name('addqty');
