<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/hello','App\Http\Controllers\HelloController@index')->name('hello');
Route::post('/hello','App\Http\Controllers\HelloController@index')->name('hello');
Route::get('/hello/{msg}','App\Http\Controllers\HelloController@other');
Route::post('/hello/other','App\Http\Controllers\HelloController@other');

Route::namespace('App\Http\Controllers\Sample')->group(function () {
Route::get('/sample', 'SampleController@index')->name('sample');
Route::get('/sample/other', 'SampleController@other');
});

Route::get('/hello/{person}', 'App\Http\Controllers\HelloController@index');