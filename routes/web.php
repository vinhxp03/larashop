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

Route::get('index', [
	'as' => 'trang-chu',
	'uses' => 'PageController@getIndex',
]);

Route::get('loai-san-pham', [
	'as' => 'loaisp',
	'uses' => 'PageController@getProductType'
]);

Route::get('chi-tier-san-pham', [
	'as' => 'chitietsp',
	'uses' => 'PageController@getProductDetail'
]);

Route::get('lien-he', [
	'as' => 'lienhe',
	'uses' => 'PageController@getContact'
]);

Route::get('gioi-thieu', [
	'as' => 'gioithieu',
	'uses' => 'PageController@getIntroduce'
]);

// Route Group Admin
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function (){
	Route::get('/', 'BaseController@index');

	// Admin Login
	Route::get('/login', 'BaseController@getLogin');
	Route::post('/login', 'BaseController@postLogin');
	// Admin Logout
	Route::get('/logout', 'BaseController@logout');

	// Register
	Route::get('/register', 'BaseController@getRegister');
	Route::post('/register', 'BaseController@postRegister');
});
