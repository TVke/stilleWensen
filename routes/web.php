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
Route::get('/contact', 'PublicPageController@contact')->name('contact');

Auth::routes();

Route::get('/', 'VideoController@show')->name('show');
