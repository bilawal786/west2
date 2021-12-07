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

Route::get('/', 'FrontendController@index')->name('front.index');
Route::get('/calender', 'FrontendController@calender')->name('front.calender');
Route::post('/addtocart', 'FrontendController@addtocart')->name('addtocart');
Route::get('/cartitems', 'FrontendController@cartitems')->name('cartitems');
Route::post('/checkout', 'FrontendController@checkoutSubmit')->name('checkout.submit');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout')->middleware('auth');
Route::get('/removecart/{id}', 'FrontendController@removecart')->name('removecart');
Route::get('/product/{id}', 'FrontendController@product')->name('front.product');

Auth::routes();

//Admin routes
Route::group(['middleware' => ['auth', 'web', 'role']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/general/gallery', 'ContentController@gallery')->name('general.gallery');
    Route::post('/gallery/store', 'ContentController@galleryStore')->name('gallery.store');

    Route::get('/general/settings', 'ContentController@settings')->name('general.settings');
    Route::post('/general/settings/store', 'ContentController@settingStore')->name('settings.store');

    Route::get('/general/slider', 'ContentController@slider')->name('general.slider');
    Route::post('/slider/store', 'ContentController@sliderStore')->name('slider.store');

    Route::get('/orders/index/{status}', 'OrderController@index')->name('orders.index');
    Route::get('/orders/view/{id}', 'OrderController@view')->name('order.view');
    Route::get('/orders/status/{id}', 'OrderController@status')->name('order.status');
});

Route::group(['middleware' => ['auth', 'web']], function() {
    Route::get('/student/dashboard', 'StudentController@dashboard')->name('student.dashboard');
    Route::post('/user/profileupdate', 'StudentController@profileupdate')->name('user.profileupdate');

});
