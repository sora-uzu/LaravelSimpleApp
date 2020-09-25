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

Route::middleware([HelloMiddleware::class])->group(function () {
    Route::get('/hello', 'App\Http\Controllers\HelloController@index')->name('hello');
    Route::get('/hello/other', 'App\Http\Controllers\HelloController@other');
});
Route::namespace('Sample')->group(function () {
    Route::get('/sample', 'App\Http\Controllers\SampleController@index')->name('hello');
    Route::get('/hello/other', 'App\Http\Controllers\SampleController@other');
});