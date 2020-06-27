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
// index main route
Route::get('/', function () {
    return view('welcome');
})->name('main');

// show all products
Route::get('products', 'ProductController@index')->name('products.index');

// create form for a new product
Route::get('products/create', 'ProductController@create')->name('products.create');

// store product to DB
Route::post('products', 'ProductController@store')->name('products.store');

// show single product
Route::get("products/{product}", 'ProductController@show')->name('products.show');

// edit a selected single product 
Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');

// update edited single product to DB
Route::match(['put', 'patch'], 'products/{product}', 'ProductController@update')->name('products.update');

// delete selected single product
Route::delete('products/{product}', 'ProductController@destroy')->name('products->destroy');
