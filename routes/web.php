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

Route::get('loai-san-pham', 'PageController@getProductType');

Route::get('chi-tier-san-pham', 'PageController@getProductDetail');

Route::get('lien-he', 'PageController@getContact');