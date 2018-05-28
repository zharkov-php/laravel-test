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

Route::get('hello', function () {

$article = DB::table('article')->get();

    return view('hello', [
        'name' => 'Andrey',
        'old' => '12',
    ], compact('article'));
});

Route::get('/articles/{article}', function ($id) {
    $article = DB::table('article')->find($id);
    return view('articles.show', compact('article'));
});
