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

Route::get('/', 'HomeController@home')->name('home');

// Basic Routes
Route::get('/about', 'HomeController@about')->name('about');




Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::post('/store-newsletter','NewsLetterController@store');

Route::group(['prefix'=> '/cart'], function(){
    Route::get('/', 'CartController@index')->name('cart');
    Route::post('/', 'CartController@store')->name('cart.store');
});

Route::group(['prefix' => '/products'], function(){
    Route::get('/', 'HomeController@shop')->name('shop');
    Route::get('/{slug}', 'HomeController@shopShow')->name('shop.single');
});

Route::group(['prefix' => '/blog'], function(){
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/{slug}', 'BlogController@show')->name('blog.show');
});

Route::get('/contact', 'ContactController@contact')->name('contact');

Route::post('/contact', 'ContactController@contactPost')->name('contact.store');

Route::group(['prefix' => 'winkel/dashboard'], function () {
    Voyager::routes();
});
