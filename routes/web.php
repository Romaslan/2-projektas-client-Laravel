<?php

use Illuminate\Support\Facades\Route;

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

//Clients
Route::prefix('clients')->group(function() {

    Route::get('', 'App\Http\Controllers\ClientController@index')->name('client.index');
    Route::get('create', 'App\Http\Controllers\ClientController@create')->name('client.create');
    Route::post('store', 'App\Http\Controllers\AuthorController@store' )->name('author.store');
    Route::get('edit/{client}', 'App\Http\Controllers\ClientController@edit')->name('client.edit');
    Route::post('update/{client}', 'App\Http\Controllers\ClientController@update')->name('client.update');
    Route::post('destroy/{client}', 'App\Http\Controllers\ClientController@destroy' )->name('client.destroy');
    Route::get('show/{client}', 'App\Http\Controllers\ClientController@show')->name('client.show');


});

//Companies
Route::prefix('companies')->group(function() {

 
    Route::get('', 'App\Http\Controllers\CompanyController@index')->name('company.index');
    Route::get('create', 'App\Http\Controllers\CompanyController@create')->name('company.create');
    Route::post('store', 'App\Http\Controllers\CompanyController@store' )->name('company.store');
    Route::get('edit/{company}', 'App\Http\Controllers\CompanyController@edit')->name('company.edit');
    Route::post('update/{company}', 'App\Http\Controllers\CompanyController@update')->name('company.update');
    Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy' )->name('company.destroy');
    Route::get('show/{company}', 'App\Http\Controllers\CompanyController@show')->name('company.show');


});
