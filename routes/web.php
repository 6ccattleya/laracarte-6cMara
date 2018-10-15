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

Route::get('/', 'PagesController@home')->name('app.home');
Route::get('about', 'PagesController@about')->name('app.about');
Route::get('contacts', 'PagesController@contacts')->name('app.contacts');
