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

// 
Route::get('/login', 'AdminController@login')->name('admin.login');
Route::post('/check_login', 'AdminController@checkLogin')->name('login.check');

Route::get('/contacts', 'AdminController@index')->name('contacts.index');
// Routes For Users
Route::get('/', 'ContactController@contact')->name('contact');
Route::post('/store', 'ContactController@store')->name('contact.store');
