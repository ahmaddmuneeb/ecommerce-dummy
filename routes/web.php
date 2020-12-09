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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/all-products', function () {
    return view('all-products');
});

Route::view('/single-product-view1', 'single-product-view1')->name('single-product-view1');
Route::view('/single-product-view2', 'single-product-view2')->name('single-product-view2');
Route::view('/single-product-view3', 'single-product-view3')->name('single-product-view3');
Route::view('/single-product-view4', 'single-product-view4')->name('single-product-view4');
Route::view('/single-product-view5', 'single-product-view5')->name('single-product-view5');
Route::view('/single-product-view6', 'single-product-view6')->name('single-product-view6');
Route::view('/single-product-view7', 'single-product-view7')->name('single-product-view7');
Route::view('/single-product-view8', 'single-product-view8')->name('single-product-view8');

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
