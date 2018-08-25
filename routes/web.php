<?php


Route::view('/', 'welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'Product\ProductController');

Route::prefix('cart')->as('carts.')->group(function(){
    Route::name('index')->get('/', 'Cart\CartController@index');
    // Route::name('destroy')->delete('/', 'Cart\CartController@destroy');
    // Route::name('store')->post('/{product}', 'Cart\CartController@store');
    // Route::name('update')->put('/{rowId}', 'Cart\CartController@update');
    // Route::name('delete')->delete('/{rowId}', 'Cart\CartController@removeProduct');
});
