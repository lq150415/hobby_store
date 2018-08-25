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

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('about_us', 'DashboardController@about_us')->name('dashboard.about_us');
Route::get('order', 'DashboardController@order')->name('dashboard.order');
Route::get('cart', 'DashboardController@cart')->name('dashboard.cart');
Route::get('whatsapp', 'DashboardController@whatsapp')->name('dashboard.whatsapp');
Route::get('cars', 'DashboardController@cars')->name('dashboard.cars');
Route::get('planes', 'DashboardController@planes')->name('dashboard.planes');
Route::get('boats', 'DashboardController@boats')->name('dashboard.boats');
Route::get('diecast', 'DashboardController@diecast')->name('dashboard.diecast');
Route::get('helicopters', 'DashboardController@helicopters')->name('dashboard.helicopters');
Route::get('enginery', 'DashboardController@enginery')->name('dashboard.enginery');
Route::get('metal', 'DashboardController@metal')->name('dashboard.metal');
Route::get('mission', 'DashboardController@mission')->name('dashboard.mission');
Route::get('modelism', 'DashboardController@modelism')->name('dashboard.modelism');
Route::get('offers', 'DashboardController@offers')->name('dashboard.offers');
Route::get('we_offer', 'DashboardController@we_offer')->name('dashboard.we_offer');
Route::get('about', 'DashboardController@about')->name('dashboard.about');
Route::get('tanks', 'DashboardController@tanks')->name('dashboard.tanks');
Route::get('vintage', 'DashboardController@vintage')->name('dashboard.vintage');
Route::get('sight', 'DashboardController@sight')->name('dashboard.sight');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin/product','ProductController');
