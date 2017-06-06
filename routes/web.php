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

Route::get('register','UsersController@ViewRegisterForm')->middleware('guest');
Route::post('register','UsersController@RegisterStore')->middleware('guest');
Route::post('/logout','UsersController@Logout')->name('logging.out');
Route::post('login','UsersController@LogIn')->name('logging.in');
Route::resource('brands','BrandsController');
Route::resource('products','ProductsController');
Route::get('motorcycles','ProductsController@MotorCategory')->name('motor.cat');
Route::get('cars','ProductsController@CarsCategory')->name('cars.cat');
Route::get('vans','ProductsController@VansCategory')->name('vans.cat');
