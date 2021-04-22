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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('user');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');
Route::get('mhs/home', 'HomeController@mhsHome')->name('mhs.home')->middleware('mahasiswa');
Route::get('dosen/home', 'HomeController@dosenHome')->name('dosen.home')->middleware('dosen');
