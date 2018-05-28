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

use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'ArticleController@index');
Route::get('/articles/{article}', 'ArticleController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
