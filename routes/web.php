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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('customers')->group(function (){
   Route::get('/','CustomerController@index')->name('customers');
   Route::get('create','CustomerController@create')->name('customers.creates');
   Route::post('create','CustomerController@store')->name('customers.store');
   Route::get('edit/{id}','CustomerController@edit')->name('customers.edit');
   Route::put('update/{id}','CustomerController@update')->name('customers.update');
   Route::delete('delete/{id}','CustomerController@destroy')->name('customers.destroy');
   Route::get('search','CustomerController@search')->name('customers.search');
});
Route::prefix('cities')->group(function () {
     route::get('/','CityController@index')->name('cities');
     route::get('create','CityController@create')->name('cities.create');
     route::post('store','CityController@store')->name('cities.store');
     route::get('edit/{id}','CityController@edit')->name('cities.edit');
     route::put('update/{id}','CityController@update')->name('cities.update');
     route::delete('destroy/{id}','CityController@destroy')->name('cities.destroy');
});
