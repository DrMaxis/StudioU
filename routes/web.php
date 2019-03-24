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

Route::get('/', 'PageController@frontPage')->name('front-page');

Route::get('/works', 'PageController@works')->name('works');

 Route::get('/works/{work}', 'PageController@showWork')->name('single-work'); 
Route::get('/works/1', 'PageController@showWork')->name('single-work');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
