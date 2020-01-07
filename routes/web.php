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
//首頁
Route::get('/', function () {
    return view('welcome');
});
//身分驗證
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//電影資訊
Route::get('/movie', 'MovieController@index')->name('movie');











