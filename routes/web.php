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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addnew', 'HomeController@addnew')->name('addnew');

Route::post('/edit/{item}', 'HomeController@edit')->name('edit');
Route::get('/edit/{item}', 'HomeController@edit')->name('edit');

Route::get('/edited', 'HomeController@edited')->name('edited');
Route::post('/edited', 'HomeController@edited')->name('edited');

Route::get('/store', 'HomeController@store')->name('store');
Route::post('/store', 'HomeController@store')->name('store');

Route::post('/show', 'HomeController@show')->name('show');
Route::get('/show', 'HomeController@show')->name('show');


Route::delete('/delete/{item}', 'HomeController@destroy')->name('destroy');
Route::get('/delete/{item}', 'HomeController@destroy')->name('destroy');