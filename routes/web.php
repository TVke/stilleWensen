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

Route::get('/', 'PublicPageController@info')->name('info');
Route::get('/overzicht', 'PublicPageController@overview')->name('overview');
Route::get('/video/{user_slug}','PublicPageController@video')->name('detail');
Route::get('/video/{user_slug}/{sound_slug}','PublicPageController@sound_video')->name('detail_sound');
Route::get('/contact', 'PublicPageController@contact')->name('contact');

Auth::routes();

Route::get('/wisher', 'VideoController@create')->name('create_wisher');
Route::get('/wisher/add', 'VideoController@store')->name('store_wisher');
Route::get('/wishers', 'VideoController@index')->name('wishers');
