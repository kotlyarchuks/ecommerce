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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('/products/{slug}', 'ProductsController@show')->name('products.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::post('cart/saveForLater/{product}', 'CartController@saveForLater')->name('cart.saveForLater');

Route::delete('/saveForLater/{product}', 'SavedForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/{product}', 'SavedForLaterController@moveToCart')->name('saveForLater.moveToCart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/confirmation', 'ConfirmationController@index')->name('confirmation.index');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
