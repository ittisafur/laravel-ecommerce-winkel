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
})->name('home');


// Basic Routes

Route::get('/shop', 'HomeController@shop')->name('shop');

Route::get('/about', 'HomeController@about')->name('about');


Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/single', 'HomeController@single')->name('single');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');


Route::group(['prefix' => '/blog'], function(){
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/{slug}', 'BlogController@show')->name('blog.show');
});

Route::group(['prefix' => 'winkel/dashboard'], function () {
    Voyager::routes();
});
