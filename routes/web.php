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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/payments', 'App\Http\Controllers\HomeController@payments');
Route::get('/alumni', 'App\Http\Controllers\HomeController@alumni');
Route::get('/curriculum/{id}/{id1}', 'App\Http\Controllers\HomeController@curriculum');
Route::get('/faqs', 'App\Http\Controllers\HomeController@faqs');
Route::get('/news', 'App\Http\Controllers\HomeController@news');
Route::get('/staff', 'App\Http\Controllers\HomeController@staff');
Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery');
