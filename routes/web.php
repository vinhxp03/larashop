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
Route::get('admin/login', 'Backend\AccountController@getLogin');
Route::post('admin/login', 'Backend\AccountController@postLogin');

// Admin Register
Route::get('admin/register', function (){ return view('backend.account.register'); });
Route::post('admin/register', 'Backend\AccountController@postRegister');

// Route Group Admin
Route::group(['middleware' => 'checklogin', 'namespace' => 'Backend', 'prefix' => 'admin'], function (){
	Route::get('', 'BaseController@index');

	// Admin
	Route::get('logout', 'AccountController@logout');
	
	// Đổi mật khẩu
	Route::post('change-password', 'AccountController@changePass');

	Route::get('profile', function (){ return view('backend.account.profile'); });

	Route::get('modal', function (){ return view('backend.modals'); });
});
