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
Route::resource('/', 'frontCOntroller');
Auth::routes();

Route::group(['middleware'=>'auth'],function(){
Route::resource('first','firstController');
Route::resource('store','storeControler');
Route::resource('category','categoryControler');
Route::resource('branch','branchController');
Route::resource('bills','billsController');
Route::resource('search','search');
Route::resource('product','productController');
Route::resource('home','HomeController');
    });
Route::resource('front','frontCOntroller');
