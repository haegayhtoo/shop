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

//Front End
Route::get('/','ShopController@showIndex')->name('index');

Route::get('/promotion','ShopController@showPromotion')->name('promotion');

// Route::get('/login','ShopController@showLogin')->name('login');

Route::get('/register','ShopController@showRegister')->name('register');

Route::get('/shoppingcart','ShopController@showShoppingcart')->name('shoppingcart');

Route::get('/subcategory','ShopController@showSubcategory')->name('subcategory');

Route::get('/brand','ShopController@showBrand')->name('brand');

Route::get('/itemdetail','ShopController@showItemdetail')->name('itemdetail');

//Backend
Route::get('admin','BackendController@dashboardfun')->name('dashboard');

Route::get('table','BackendController@table')->name('table');
Route::resource('brands', 'BrandController');

Route::resource('categories', 'CategoryController');

Route::resource('subcategories', 'SubcategoryController');


Route::get('/loginform','ShopController@showLogin')->name('loginpage');


Route::middleware('role:Admin')->group(function () {
    Route::resource('items', 'ItemController');



});
Route::resource('orders','OrderController');
Route::get('/home','HomeController@index')->name('home');
Route::post('/getitems','FrontendController@getItems')->name('getitems');
Route::get('/getallitems','FrontendController@getAllItems')->name('getallitems');

//laravel tips and Tricks

Route::resource('videos','VideoController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
