<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contactus','\App\Http\Controllers\ContactController@index');
Route::post('/contactus','\App\Http\Controllers\ContactController@store')->name('contactus.store');
Route::get('/weblog','\App\Http\Controllers\WeblogController@index');
Route::get('/weblog/{id}/{weblogSlug}','\App\Http\Controllers\WeblogController@detail')->name('weblog.detail');
Route::post('/weblog','\App\Http\Controllers\WeblogController@send')->name('weblog.send');
Route::get('/weblog/delete/{id}','\App\Http\Controllers\WeblogController@delete');
Route::get('/suggestion','\App\Http\Controllers\SuggestionController@index');


Route::get('/','\App\Http\Controllers\PricesController@index');




