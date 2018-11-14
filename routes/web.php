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

// Admin Login
Route::get('admin/login', 'Backend\AdminController@getLogin');
Route::post('admin/login', 'Backend\AdminController@postLogin');

// Admin Register
Route::get('admin/register', 'Backend\AdminController@getRegister');
Route::post('admin/register', 'Backend\AdminController@postRegister');

// Route Group Admin
Route::group(['middleware' => 'checklogin', 'namespace' => 'Backend', 'prefix' => 'admin'], function (){
	Route::get('', 'BaseController@index');

	// Admin Logout
	Route::get('logout', 'AdminController@logout');
});
