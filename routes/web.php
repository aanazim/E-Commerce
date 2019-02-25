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
Route::resource('/add-to-cart','CartController');
Route::resource('/check','CheckoutController');
Route::get('details/{id}', 'Product_detailsController@details')->name('product.details');
Route::get('/category/{category}','Category_postController@post')->name('category.post');
Route::get('/manufacture/{manufacture}','Manufacture_PostController@post')->name('manufacture.post');
Route::resource('/payment','PaymentController');
Route::resource('/shipping','ShippingController');
/*customer login and logout*/
Route::resource('/check_login','Customer_loginController');
Route::get('user_logout','CheckoutController@user_logout')->name('user_logout');
/*BACKEND*/

Route::group(["prefix"=>'admin','middleware' => ['auth', 'admin'],'namespace'=>'admin'],function (){

	Route::get('dashboard/','UserController@user')->name('dashboard');
	Route::resource('/category','CategoryController');
	Route::get('/category/{category}','CategoryController@vanish')->name('category.delete');
	Route::resource('/manufacture','ManufactureController');
	Route::resource('/rate','ProductController');
	Route::put('status/{id}', 'ProductController@status')->name('status.approved');
	Route::put('cstatus/{id}', 'CategoryController@status')->name('cstatus.approved');
	Route::put('mstatus/{id}', 'ManufactureController@status')->name('mstatus.approved');
	Route::put('sstatus/{id}', 'MySliderController@status')->name('sstatus.approved');  
	Route::resource('/myslider', 'MySliderController');

});





/*Route::get('/empty', function(){
	Cart::destroy();
	return 'Destroyed';
});*/
Auth::routes();

/*Route::get('/dashboard', 'HomeController@user')->name('dashboard');*/
