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
    return view('user.home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('exit');

Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
    Route::resource('users', 'UserController');
});

Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/editprofile', 'UserController@editprofile')->name('editprofile');

Route::post('/saveprofile/{id?}', 'UserController@saveprofile')->name('saveprofile');

Route::post('/cart', 'UserController@saveCart')->name('saveCart');

Route::post('/popup','ModalController@popup')->name('popup');

Route::get('/cartpage','UserController@cartpage')->name('cartpage');

Route::delete('/removeItem/{id}','UserController@removeCartItem')->name('removeItem');
