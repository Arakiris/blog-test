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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', 'AdminUsersController');
    Route::resource('posts', 'AdminPostsController');
});


Route::get('/admin', function(){
    return view('admin.index');
});
