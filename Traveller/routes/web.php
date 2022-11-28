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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* view作成用の仮のルーティング */

Route::get('/top', function () {
    return view('posts.top');
});

Route::get('/create', function () {
    return view('posts.create');
});

Route::get('/edit', function () {
    return view('posts.edit');
});

Route::get('/mypage', function () {
    return view('posts.mypage');
});

Route::get('/index', function () {
    return view('posts.index');
});

Route::get('/show', function () {
    return view('posts.show');
});

Route::get('/header', function () {
    return view('layouts/app');
});