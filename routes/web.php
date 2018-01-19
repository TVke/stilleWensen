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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::redirect('/public','/');

    Route::view('/','info')->name('info');
    Route::view('/contact','contact')->name('contact');
    Route::get('/overzicht', 'PublicPageController@overview')->name('overview');
    Route::get('/video/{user_slug}','PublicPageController@video')->name('detail');
    Route::get('/video/{user_slug}/{sound_slug}','PublicPageController@sound_video')->name('detail_sound');

    Route::post('/contact','PublicPageController@contact')->name('contact');

    /* mails */
    Route::get('/mail/{wish}','PublicPageController@onlineMail');
    Route::get('/mail-en/{wish}','PublicPageController@enOnlineMail');

    /* Auth */
    Route::get('/meir','Auth\LoginController@showLoginForm')->name('login');
    Route::post('/meir','Auth\LoginController@login');
    Route::post('/logout','Auth\LoginController@logout')->name('logout');

    Route::get('/wisher', 'VideoController@create')->name('create_wisher');
    Route::post('/wisher', 'VideoController@store')->name('store_wisher');
    Route::get('/wisher/{sender}', 'VideoController@show')->name('show_wisher');
    Route::get('/wishers', 'VideoController@index')->name('wishers');
    Route::get('/terms','VideoController@terms')->name('terms');

});