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

Route::view('/','welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-codes', 'PromotionCodeController@listNewPromotionCodes')->name('listNewPromotionCodes');

Route::get('/used-codes', 'PromotionCodeController@listUsedPromotionCodes')->name('listUsedPromotionCodes');

Route::get('/new-promotion-code', 'PromotionCodeController@newPromotionCode')->name('newPromotionCode');

Route::get('/use-promotion-code/{id}', 'PromotionCodeController@usePromotionCode')->name('usePromotionCode');
