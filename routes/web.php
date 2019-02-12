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
/*FRONTEND*/
Route::get('/','HomeController@index')->name('layout');





/*BACKEND*/
Route::get('admin/','AdminController@index')->name('admin');

Route::get('dashboard/','AdminSuperController@dashboard')->name('dashboard');
Route::post('admin_login/','AdminController@admin_login')->name('admin_login');

Route::get('logout','AdminSuperController@logout')->name('logout');
Route::resource('/category','CategoryController');
Route::get('/category/{category}','CategoryController@vanish')->name('category.delete');
Route::get('/category/{category}','CategoryController@post')->name('category.post');
Route::resource('/manufacture','ManufactureController');
Route::get('/manufacture/{manufacture}','ManufactureController@post')->name('manufacture.post');

Route::resource('/rate','ProductController');
Route::put('status/{id}', 'ProductController@status')->name('status.approved');
Route::get('details/{id}', 'ProductController@details')->name('product.details');
Route::put('cstatus/{id}', 'CategoryController@status')->name('cstatus.approved');
Route::put('mstatus/{id}', 'ManufactureController@status')->name('mstatus.approved');
Route::put('sstatus/{id}', 'MySliderController@status')->name('sstatus.approved');

Route::resource('/myslider', 'MySliderController');

/*Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product', 'ProductController@store')->name('product.store');*/