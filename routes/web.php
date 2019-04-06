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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->namespace('Admin')->name('admin.')->group(function(){
	Route::resource('/admin', 'HomeController')->only('index');
	Route::resource('/admin/category', 'CategoryController');
	Route::resource('/admin/tag', 'TagController');
	Route::resource('/admin/comment', 'CommentController');
	
});
