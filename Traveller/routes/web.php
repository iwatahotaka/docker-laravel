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
    return view('top');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/header', function () {
    return view('layouts/app');
});

Route::get('/commentCreate', function () {
    return view('commentCreate');
});

// 以下、コントローラーを通した本格的なルーティング
//開発中に上記のview確認用のルートと同じURLを指定する場合は、その部分に該当する箇所をコメントアウトしておいて下さい！

// Route::get('/posts', 'PostController@index')->name('posts.index');