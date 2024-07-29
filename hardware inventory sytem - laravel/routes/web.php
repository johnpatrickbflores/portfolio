<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return \App\Models\Category::all();
});

Route::get('/customer', function () {
    return \App\Models\Customer::all();
});

Route::get('/delivery', function () {
    return \App\Models\Delivery::all();
});

Route::get('/product', function () {
    return \App\Models\Product::all();
});

Route::get('/purchase', function () {
    return \App\Models\Purchase::all();
});

Route::get('/supplier', function () {
    return \App\Models\Supplier::all();
});