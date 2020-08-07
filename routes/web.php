<?php

// Routing：それぞれのアドレスに個別のコントローラとアクションを割り当てる機能

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

// Routingを定義する

Route::group(['prefix' => 'admin'], function() {
// ↑グループ化　　↑adminから始まるURLに設定
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('admin/profile/create', 'Admin\ProfileController@add Action');
    Route::get('admin/profile/edit', 'Admin\ProfileController@edit Action');
  });