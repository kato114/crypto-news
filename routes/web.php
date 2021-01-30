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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/mining', 'HomeController@mining')->name('mining');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/exchange', 'HomeController@exchange')->name('exchange');
Route::get('/wallet', 'HomeController@wallet')->name('wallet');
Route::get('/contact', 'HomeController@contact')->name('contact');
