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

// frontend routes are starts  here........

Route::get('/', 'AmishbazarController@index')->name('/');
Route::get('/shop','AmishbazarController@shop')->name('shop');
Route::get('/blog','AmishbazarController@blog')->name('blog');
Route::get('/single-product','AmishbazarController@single_product')->name('single-product');
Route::get('/single-blog','AmishbazarController@single_blog')->name('single-blog');

// frontend routes are ends here........

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
