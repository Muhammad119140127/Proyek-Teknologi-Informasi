<?php

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
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Web User Routes
|--------------------------------------------------------------------------
*/
Route::get('/latest', 'UserController@latest')->name('latest');
Route::get('/about', 'UserController@about')->name('about');
Route::get('/product', 'UserController@product')->name('product');

Route::get('/tracking', 'UserController@tracking')->name('tracking');

// Filtering
Route::get('/product/tshirt', 'UserController@tshirt')->name('tshirt');
Route::get('/product/jersey', 'UserController@jersey')->name('jersey');
Route::get('/product/hoodie', 'UserController@hoodie')->name('hoodie');

Route::get('product/kuantitas', 'UserController@kuantitas')->name('kuantitas');
Route::get('product/terbaru', 'UserController@terbaru')->name('terbaru');
Route::get('product/terlama', 'UserController@terlama')->name('terlama');
Route::get('product/diskon', 'UserController@diskon')->name('diskon');

Route::post('product/cari', 'UserController@cari')->name('cari');
Route::post('product/max', 'UserController@max')->name('max');

Route::get('detail/{data}', 'UserController@detail')->name('detail');


/*
|Admin
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

/*
|Crud Product Admin
|Disini untuk CRUD Product
*/
Route::get('/produk', 'AdminController@produk')->name('produk');
Route::get('/create', 'AdminController@create')->name('create');
Route::post('/create', 'AdminController@store')->name('store');
Route::get('/edit/{produk}', 'AdminController@edit')->name('edit');
Route::patch('/edit/{produk}', 'AdminController@update')->name('edit');
Route::get('/delete/{id}', 'AdminController@destroy')->name('delete');

/*
|Pesanan Product
|Disini untuk Pesanan Product
*/
Route::get('/pesanan', 'AdminController@pesanan')->name('pesanan');
Route::post('/pesananPost', 'AdminController@pesananPost')->name('pesananPost');
Route::patch('/pesananUpdate/{id}', 'AdminController@pesananUpdate')->name('pesananUpdate');


/*
|End Admin
|--------------------------------------------------------------------------
*/