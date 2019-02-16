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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Donations
Route::get('donations/{id}', 'DonationController@show')->name('donations.show');
Route::get('new/donations', 'DonationController@create')->name('donations.create');
Route::post('new/donations', 'DonationController@store')->name('donations.store');

//Payment
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
