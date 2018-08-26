<?php


Route::view('/', 'welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'Product\ProductController');

Route::prefix('cart')->as('carts.')->group(function(){
    Route::name('show')->get('/', 'Cart\CartController@show');
    Route::name('store')->post('/{product}', 'Cart\CartController@store');
    Route::name('destroy')->delete('/{rowId}', 'Cart\CartController@destroy');
    // Route::name('update')->put('/{rowId}', 'Cart\CartController@update');
    // Route::name('empty')->delete('/', 'Cart\CartController@empty');
});
