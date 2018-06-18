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

Route::group(['prefix'=>'api'], function(){
    // Route::get('products',['as'=>'products', function(){
    //     return App\Product::all();
    // }]);
    Route::resource('products', 'ProductController', ['only'=>['index', 'store', 'update']]);
    Route::resource('products.descriptions', 'ProductDescriptionController', ['only'=>['index', 'store']]);
});


